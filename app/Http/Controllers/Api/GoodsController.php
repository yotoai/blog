<?php

namespace App\Http\Controllers\Api;

use App\Jobs\QueueTest;
use App\Services\GoodsService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpAmqpLib\Connection\AMQPSocketConnection;
use PhpAmqpLib\Connection\AMQPStreamConnection;
use PhpAmqpLib\Exchange\AMQPExchangeType;

class GoodsController extends Controller
{
    protected $goodsService;

    public function __construct(GoodsService $goodsService)
    {
        $this->goodsService = $goodsService;
    }


    /**
     * @param Request $request
     */
    public function index(Request $request)
    {
//        $this->dispatch(new QueueTest([1,2,5,4,5,66,3]));
//        QueueTest::dispatch(['a','b','c'])->chain([]);
        //
//        $connect = new AMQPStreamConnection();

//        $channel = $connect->channel();

//        $channel->queue_bind()
        $res = $this->goodsService->getGoodsList($request);
//            $this->getCoordinate(2, 104);
//        var_dump($res);

        return $res?? 1;
    }

    protected function getCoordinate($row, $index)
    {
        if ($index <= 26) {
            return chr($index+64) . $row;
        }

        if ($index % 26 == 0) {
            return chr($index / 26 - 1 + 64) . chr(90) . $row;
        } else {
            return chr(floor($index / 26) + 64) . chr($index % 26 + 64) . $row;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $sql = 'select id,tag from tags where tag='. '言情';


    }
}
