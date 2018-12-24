@extends('Home.HomePublic.public')
@section('title','抽奖页')
@section('content')
<html>
    <head></head>
    <link rel="stylesheet" type="text/css" href="/static/homes/award/common.css">
    <link rel="stylesheet" href="/static/homes/award/drawbox.css" id="hash-846340334">
    <link rel="stylesheet" href="/static/homes/award/style.css" id="hash-2055236390">
    <link rel="stylesheet" href="/static/homes/award/style(1).css" id="hash-118530072">
    <script src="/static/jquery-1.7.2.min.js"></script>
    <style>
    .border-show{
        width: 5px;
        height:5px; 
        box-shadow:0 0 5px 5px #ffff00;
    }
    </style>
    <body style="background-color:#fff9e9;">
    </div><div class="J_mod mod-sqdrawbox modlottery167621">
        <style>
            .mod-sqdrawbox img{
            width:200px !important;
            height:200px !important;
            }
            .mod-sqdrawbox .draw-box .draw-in .lottery table tr td a:hover:before{
                margin-left: -100px;
                width: 200px; height: 200px;
                box-shadow: 0 0 20px 20px #ffff00;
            }
        </style>
        
        <div class="draw-box" style="padding-top:0px;padding-bottom:0px;">
            <input type="hidden" value="{{$i=1}}">
            <div class="draw-in" style="width:630px;height:665px;padding:0;position:relative">
                <div id="lottery167621" class="lottery" style="width:630px;height:620px;position:absolute;top:45px;left:0px;">
                    <table border="0" cellpadding="0" cellspacing="0" style="padding:0">
                        <tbody>
                        <tr style="vertical-align: top;">
                            <!-- 抽奖图片开始 -->
                            <!-- boder-show -->
                            @foreach($award as $v)
                            <td class="lottery-unit" data-id="{{$i}}" style="text-align: left;padding: 2px;" title="{{$v->id}}" data-desc="{{$v->desc}}" >
                            <img src="{{$v->pic}}">
                            </td>
                           
                            @if($i%4 == 0)
                            </tr>
                            <tr style="vertical-align: top;">
                            @endif
                            <div style="display: none;">{{$i++}}</div>
                            @endforeach
                            <!-- 抽奖图片结束 -->
                        </tr>
                        <tr>
                            <td colspan="4" id="choujiang"><a class="lottery-abtn" ><img src="/static/homes/award/08d572e0-b4e2-4299-bf08-fca554b688c7.png"></a></td>
                        </tr>
                    </tbody></table>
                </div>
            </div>
        </div>
    </div>

    </body>
    <script>
        var flag = true;
        $('.lottery-abtn').click(function(){  
            if(flag){
                flag = false;
                var m = 60;
                var len = $('.lottery-unit').length;
                // alert(len);
                timmer = setInterval(function(){
                    //次数自减
                    m--;
                    //获取每次抽奖的位置随机数
                    var n = Math.ceil(Math.random() * len);
                    //选中的样式
                    $('.lottery-unit').each(function(){
                        if($(this).attr('data-id') == n){
                            $(this).addClass('border-show');
                        }else{
                            $(this).removeClass('border-show');
                        }
                    });
                    if(m == 0){
                        //清除定时器
                        clearInterval(timmer);
                        flag = true;
                        var id = $('.border-show').attr('title');
                        //Ajax
                        $.get('/lottery',{id:id},function(data){
                            if(data == 'success'){
                                setTimeout(function(){
                                    alert('恭喜您获得'+$('.border-show').attr('data-desc'));
                                },500);        
                            }else {
                                setTimeout(function(){
                                    alert('您已抽过奖,无法继续抽奖');
                                },500);
                            }
                        });
                    }
                },50);    
            }
        });
    </script>
    </html>
@endsection