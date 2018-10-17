@extends('layout.news_layout')

@section('content')
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h1>ข่าวที่น่าสนใจ2</h1>
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu.png') }}"><br/></div>
      <p>โดย Mono News, October 16, 2018</p>
      <b>ตำแหน่งหลักและหน้าที่</b>
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu7.png') }}"><br/></div>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Elsu เป็นฮีโร่ในตำแหน่งแครี่ ซึ่งสามารถยืนเลนกลางหรือเลนข้างก็ได้ เค้าสามารถเอาตัวรอดได้หากยืนข้างๆกำแพงหรือ 
      Object Elsu จะตีแรงตั้งแต่ต้นเกมทั้งๆที่ยังไม่มีของ ฉะนั้นจะสามารถกดเลนได้ดีหากอีกฝ่ายตัวบาง เช่น เมจหรือแครี่
      </p> 
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;แนวทางในการเดินทีมไฟต์ Elsu สามารถวางอุปกรณ์สอดแนมได้ทั้งหมด 3 ชิ้น โดยจะวางในพุ่ม หรือบนพื้นก็ได้ 
        ทั้งนี้ทั้งนั้นหากในจุดที่เค้าวางนั้นมีการไฟต์กันในระยะ จะทำให้เค้ายิงแรงเพิ่ม และสกิล 2 จะทำให้เค้าเก็บคู่ต่อสู้ได้ในระยะไกล เป็นแครี่ที่ทำดาเมจได้ไม่ต่อเนื่อง แต่ทำได้รุนแรงทีเดียวเชียว               
      </p>      
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu1.jpg') }}"><br/></div>
      <b>วิธีได้รับ</b>
      <p> คูปอง : 590 คูปอง (ไม่มีขายเหรียญทอง)</p>  
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu2.jpg') }}"><br/></div>
      <b>สกิลและแนวทางการอัพเบื้องต้น</b><br/>
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu3.jpg') }}"></div><br/>    
      <b>Passive Skill : Stalk</b>  
      <ul>       
        <li>การโจมตีปกติของ Elsu จะสร้าง ความเสียหายกายภาพ 180% AD แต่ระยะเวลาของการโจมตีแต่ละครั้งค่อนข้างช้า และไม่สามารถติดคริได้ (ทุกโอกาสติดคริ 1% จะถูกเปลี่ยนเป็นพลังโจมตี 3 หน่วย) 
        นอกจากนี้หากไม่ได้อยู่ในการต่อสู้ เขาจะสามารถหายตัวเมื่อยืนชิดกับกำแพงหรือสิ่งปลูกสร้าง และวิ่งเร็วขึ้น 16% - 30% (เพิ่มขึ้นตาม LV)</li>
      </ul>
      <b>Skill 1 : Sentinel</b>  
      <ul>       
        <li>Elsu วางอุปกรณ์สอดแนมลงพื้น (ระยะไกลขึ้นตาม LV) โดยจะวางได้ทุกๆ 50 วิ สูงสุด 3 ชิ้น และจะอยู่เป็นเวลา 300 วิ ซึ่งมันจะหายไปหากถูกศัตรูเหยียบ (การโจมตีปกติจะแรงขึ้น หากศัตรูอยู่ในระยะของอุปกรณ์)
        *Passive : เมื่ออยู่กับที่ เขาจะได้รับสถานะซุ่มยิง 1 ครั้ง (สูงสุด 5 ครั้ง) แต่ละครั้งจะเพิ่มเจาะเกราะ 7 / 8 / 9 / 10 / 11 / 12% ซึ่งเอฟเฟคนี้จะหายไปทันทีหากเขาเคลื่อนที่</li>
      </ul>
      <b>Skill 2 : Snipe</b>  
      <ul>       
        <li>Elsu เล็ง และยิงไปยังทิศทางที่กำหนด สร้าง ความเสียหายกายภาพ 1050 / 1200 / 1350 / 1500 / 1650 / 1800 และลดความเร็วเป้าหมายลง การเล็งเป้าใช้เวลา 2 วิ แต่หากยิงก่อนเล็งเสร็จจะทำให้กระสุนไม่ตรงเป้า 
        โดยสกิลนี้จะบรรจุกระสุนทุก 16 วิ (สะสมสูงสุดได้ 3 นัด)</li>
      </ul>
      <b>Ultimate Skill : Disengage</b>  
      <ul>       
        <li>Elsu กระโดดยิงถอยหลัง สร้างความเสียหายกายภาพ 500 / 700 / 900 พร้อมลดความเร็วเคลื่อนที่เป้าหมาย 50% เป็นเวลา 2 วิ จากนั้นเขาจะวิ่งเร็วขึ้น 30% เป็นเวลา 2 วิ (เอฟเฟกต์นี้จะหยุดทันทีหากเขาใช้สกิล หรือโจมตีปกติ)</li>
      </ul> 
      <b>ไอเทม</b> 
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu4.jpg') }}"></div><br/>
      <b>ข้อดี</b>
      <ul>       
        <li>มีดาเมจที่แรงมาก</li>
        <li>สามารถสร้างดาเมจได้จากระยะไกล (Poke Skill)</li>
        <li>มีสกิลที่สามารถเอาตัวรอดได้</li>
        <li>มีสกิลที่สามารถเปิดแผนที่ได้</li>
      </ul> 
      <b>ข้อเสีย</b>
      <ul>       
        <li>สร้างดาเมจได้ไม่ต่อเนื่อง</li>
        <li>โจมตีธรรมดาช้า</li>
        <li>มีสกิลหนีเพียงสกิลเดียว</li>
      </ul> 
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/Elsu5.jpg') }}"></div><br/>
    </div> 
  </div> 

  <div class="rightcolumn">    
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion.jpg') }}"><br/><br/></div>     
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion1.jpg') }}"><br/><br/></div>
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion2.jpg') }}"><br/><br/></div>
  </div>  
</div>  
@endsection