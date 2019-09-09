<form action="">
    当前用户：{{$u_id}}<br>
     <hr>
     共设奖项：<br>
     一等奖 1个&nbsp;&nbsp;<input type="button" value='剩余{{$kl[0]->now}}' javascript:;><br>
		二等奖 2个&nbsp;&nbsp;<input type="button" value='剩余{{$kl[1]->now}}' javascript:;><br>
		三等奖 3个&nbsp;&nbsp;<input type="button" value='剩余{{$kl[2]->now}}' javascript:;><br>
		阳光普照奖	10个&nbsp;&nbsp;<input type="button" value='剩余{{$kl[3]->now}}' javascript:;>
     <hr>

    <input type="submit" value='开始抽奖'>
</form>