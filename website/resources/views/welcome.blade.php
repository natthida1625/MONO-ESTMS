@extends('layout.main')

@section('content')
<div class="container">
    <div class="row">
            <div class="post">
                <h3>อัพเดพใหม่!! ปรับสมดุลฮีโร่</h3>
                <p>โดย Mono News, October 3, 2018</p>
                <div><img class="rounded-mx-auto" src="{{ asset('asset/img/title.png') }}"></div><br/>
                <p>ถึงเหล่าชาเลนเจอร์ผู้กล้าหาญ บัดนี้ ถึงเวลาแห่งสงครามครั้งใหม่ Clone Wars สงครามร่างเหมือน 
                ที่เหล่าชาเลนเจอร์จะได้สัมผัสกับประสบการณ์ใหม่ที่จะให้ทุกคนในทีมใช้ฮีโร่ตัวเดียวกันทั้งทีม อันจะนำมาซึ่งความสนุก 
                และเร้าใจในแบบที่ไม่เคยสัมผัสมาก่อน นอกจากนี้ยังมีการปรับสมดุลฮีโร่ และไอเท็มต่างๆ อีกมากมาย...</p>
                <a href="{{ action('PagesController@news')}}" class="btn btn-primary">Read more &nbsp;+</a>
            </div>                
            <hr/>                
            <div class="post">
                <h3>เปิดศึก AIC 2018 ไทยได้ 3 โควตา พร้อมชิงรางวัล 20 ล้าน
                </h3>
                <p>โดย Mono News, October 10, 2018</p>
                <div><img class="rounded-mx-auto" src="{{ asset('asset/img/title1.jpg') }}"></div><br/>
                <p>สำหรับการแข่งขันอีสปอร์ต เกม ROV หรือ Arena of Valor ออกแถลงการณ์ถึงกำหนดการและสถานที่ทัวร์นาเมนต์ระดับนานาชาติ 
                รายการ Arena of Valor International Championship 2018 หรือ AIC ออกมาเป็นที่เรียบร้อยแล้ว 
                โดยปีนี้จะใช้สังเวียนประเทศไทย และ ประเทศเวียดนาม</p>
                <a href="{{ action('PagesController@news1')}}" class="btn btn-primary">Read more &nbsp;+</a>
            </div>                
            <hr/>                 
            <div class="post">
                <h3>RoV Pro League Qualifiers Season 2 </h3>
                <p>โดย Mono News, October 16, 2018</p>
                <div><img class="rounded-mx-auto" src="{{ asset('asset/img/title2.jpg') }}"></div><br/>
                <p>กลับมาอีกครั้งกับการแข่งขันสุดยิ่งใหญ่ เส้นทางสู่การเป็นนักกีฬามืออาชีพกับรายการ RoV Pro League Qualifiers Season 2 
                เปิดรับสมัครทีมหน้าใหม่เพื่อจะเป็น 1 ใน 8 ทีมของรายการ RoV Pro League Season 2 ที่จะจัดขึ้นในเร็วๆ นี้</p>    
                <a href="{{ action('PagesController@news2')}}" class="btn btn-primary">Read more &nbsp;+</a>
            </div>                
            <br/>
    </div>    
</div>
@endsection