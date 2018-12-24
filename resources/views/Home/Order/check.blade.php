  @foreach($order as $r)
   <div class="list-group-item"> 
    <div class="o-info"> 
     <div class="col-info"> 
      <input type="checkbox" class="checkbox" name="payCheck" value="28150260702" paymentstatus="2" clearorder="false" /> 
      <!-- 奖品订单 --> 
      <span class="o-date">{{date('Y-m-d H:i',$r->order_time)}}</span> 
      <span class="o-no">订单号：<a href="https://www.vmall.com/member/order-28150260702" title="28150260702">{{$r->order_number}}</a></span> 
     </div> 
     <div class="col-state">
       订单已确认&nbsp;|&nbsp; {{$r->buy_status}}
     </div> 
    </div> 
    <div class="o-pro"> 
     <table border="0" cellpadding="0" cellspacing="0"> 
      <tbody> 
       <!-- 普通商品列表 -->
       @foreach($r->info as $key=>$rr)
       <tr> 
        <td class="col-pro-img"> <p class="p-img"> <a title="{{$rr->gname}} {{$rr->sdesc}}" href="/homegoodsinfo/{{$rr->gid}}" target="_blank"> <img alt="{{$rr->gname}} {{$rr->sdesc}}" src="{{$rr->logo}}"/> </a> </p> </td> 
        <td class="col-pro-info"> <p class="p-name"> <a title="{{$rr->gname}} {{$rr->sdesc}}" target="_blank" href="/homegoodsinfo/{{$rr->gid}}">{{$rr->gname}} {{$rr->sdesc}}</a> </p> </td> 
        <td class="col-price"> <em>&yen;</em> <span>{{$rr->sprice}}.00</span> </td> 
        <td class="col-quty">{{$rr->quantity}}</td> 
        @if($key == 0)
          @if($r->buy_status == '未付款')
            <td rowspan="{{count($r->info)}}" class="col-pay"> <p> <em>&yen;</em> <span>{{$r->total_price}}.00</span> </p> </td> 
            <td rowspan="{{count($r->info)}}" class="col-operate"> <p class="p-button"> <a class="button-operate-pay" href="/orderpaynow/{{$r->id}}/{{$r->order_number}}/{{$rr->gname}} {{$rr->sdesc}}" target="_blank"> <span> 立即支付 </span> </a></p>  <p class="p-link"><a href="javascript:void(0);" class="cancel" data-id="{{$r->id}}">取消订单</a></p> <p class="p-link"><a href="/homeorder/{{$r->id}}">订单详情</a></p> </td>
          @elseif($r->buy_status == '已付款')
            <td rowspan="{{count($r->info)}}" class="col-pay"> <p> <em>&yen;</em> <span>{{$r->total_price}}.00</span> </p> </td> 
            <td rowspan="{{count($r->info)}}" class="col-operate"> @if($r->order_status == '已收货') <p class="p-button"> <a class="button-operate-pay" href="javascript:void(0)" > <span> 订单评价 </span> </a></p> @elseif($r->order_status == '已发货') <p class="p-button"> <a class="button-operate-pay" href="javascript:void(0)" onclick="orderstatus(this,{{$r->id}})"> <span> 确认收货 </span> </a></p> @endif <p class="p-link">{{$r->order_status}}</p>   <p class="p-link"><a href="/homeorder/{{$r->id}}">订单详情</a></p> </td>
          @else
            <td rowspan="{{count($r->info)}}" class="col-pay"> <p> <em>&yen;</em> <span>{{$r->total_price}}.00</span> </p> </td> 
            <td rowspan="{{count($r->info)}}" class="col-operate">  <p class="p-link">订单已取消</p><p class="p-link"><br><br><a href="/homeorder/{{$r->id}}">订单详情</a></p> </td>
          @endif
        @endif 
       </tr> 
       @endforeach
      </tbody> 
     </table> 
    </div> 
   </div> 
  @endforeach