<?php


namespace App\Services;


use Illuminate\Http\Request;

class GoodsService extends ElasticService
{
    public function getGoodsList(Request $request)
    {
        $params = [
            'index' => 'goods',
            'client' => ['ignore' => [404]],
            'body' => [
                'query' => [
//                    'match' => [                    // 分词精确匹配 （字段类型为text的话，查询数据和字段数据都会分词）
//                        'name' => $request->name
//                    ],
                    'bool' => [                   //  bool
                        'must' => [               //  must 差不多等于sql的 and ， should 等于 or ， must_not 等于 not
                            [
                                'term' => [       //  不分词精确匹配 （字段类型为text的话，字段数据会分词，查询数据不分词）
                                    'name' => 'java'
                                ]
                            ],
                            [
                                'term' => [
                                    'name' => '编程'
                                ]
                            ]
                        ],
                        'filter' => [             // 过滤
                            'range' => [
                                'price' => [
                                    'gt' => 50,
                                    'lt' => 150
                                ]
                            ]
                        ]
                    ]
                ],
//                '_source' => ['name', 'price'],  // 过滤字段
//                'sort' => [                      // 排序
//                    'price' => [
//                        'order' => 'desc'
//                    ]
//                ],
                'from' => 0,   // 分页 起始页
                'size' => 10,  // 分页 页数据 pageSize
                'highlight' => [  // 搜索高亮
                    'pre_tags' => '<span style="color: red;">',
                    'post_tags' => '</span>',
                    'fields' => [
                        'name' => new \stdClass()
                    ]
                ]
            ]
        ];


        $response = $this->client()->search($params);  // 分页用里面的 hits['total']['value'] 数据总条数

//        $res = $this->client()->get($params = [
//            'index' => 'goods',
//            'id' => '232323',
//            'client' => ['ignore' => [404]],
//        ]);
//        $count = $this->es()->count($params);  // 分页无需这个count

        $list = [];
        foreach ($response['hits']['hits'] as $key => $val) {
            $temp = $val['_source'];
            $list[] = [
                'id' => $val['_id'],
                'type' => $temp['type'],
                'created_at' => $temp['created_at'],
                'img' => $temp['img'],
                'name' => $val['highlight']['name'][0],
                'sku' => $temp['sku'],
                'price' => $temp['price']
            ];
        }

        return $list;
    }
}