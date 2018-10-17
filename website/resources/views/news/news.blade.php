@extends('layout.news_layout')

@section('content')
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h1>อัพเดตใหม่!! ปรับสมดุล 31 ฮีโร่</h1>
      <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic1.png') }}"><br/></div>
      <p>โดย Mono News, October 3, 2018</p>
      <b>Clone Wars สงครามร่างเหมือน</b>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;เกม MOBA ในมือถือสุดฮิตอย่าง ROV จากค่าย Garena ได้มีการอัพเดตเกมซึ่งตอนนี้ได้มีการปรับ Patch ใหม่ โดยการปรับสมดุลของเกมให้มากขึ้น 
         รวมถึงมีการเพิ่มความสามารถและลดความสามารถของฮีโร่บางตัวในเกม ใครอยากรู้ว่าฮีโร่ตัวใดบ้างที่มีการเปลี่ยนแปลง...มาดูกันเลย
      </p> 
      <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;BATTLE OF THE CLONES เป็นโหมดที่ทั้งทีมจะใช้ฮีโร่ตัวเดียวกันหมด แต่จะมีฮีโร่บางตัวไม่สามารถใช้ได้ในโหมดนี้ โดยเกมจะกำหนดว่า
        <ul>
          <li>เลือกโหวตฮีโร่ตัวใดก็ได้ ฮีโร่ที่ได้โหวตเยอะสุดจะกลายเป็นฮีโร่ของทีม แต่หากผลโหวตเท่ากันระบบจะทำการสุ่ม</li>
          <li>จะได้เล่นฮีโร่ตัวเดียวกันตามที่โหวต แม้จะไม่ได้ครอบครองฮีโร่ตัวนั้นก็ตาม</li>
          <li>ระบบการเล่นเป็นแผนที่โหมดปกติ 5v5</li>
          <li>เมื่อเริ่มเกมฮีโร่จะมีเลเวล 3 และอัตราการเติบโตของฮีโร่จะขึ้นเร็วกว่าโหมดปกติ รวมทั้งครีปและป้อม</li>
        </ul>
      </p>
      <p>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;นอกจากนี้ยังมีการปรับสมดุลของแต่ละคลาสในโหมดดังกล่าว
        <ul>
          <li><b>Tank</b> เพิ่มพลังโจมตี 20%</li>
          <li><b>Carry</b> ป้องกันความเสียหายเพิ่ม 20%</li>
          <li><b>Support</b> เพิ่มพลังโจมตี 20%</li>
          <li><b>Mage</b> ป้องกันความเสียหายเพิ่ม 20%</li>
          <li><b>Warrior</b> ป้องกันความเสียหายเพิ่ม 10% เพิ่มพลังโจมตี 10%</li>
          <li><b>Assassin</b> ป้องกันความเสียหายเพิ่ม 10% เพิ่มพลังโจมตี 10%</li>
        </ul>
      </p>
      <p>
        <b>การเปลี่ยนแปลงของไอเทม</b>
        <ul>
          <li>
            <b>Hunter’s Crossbow</b> 
            <p>เปลี่ยนเป็น Hunter’s Knife</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item1.png') }}"><br/>
          </li>
          <li>
            <b>Firestorm Bow</b>
            <p>สกิลติดตัว – Firestorm : สร้างความเสียหายเวทเพิ่มขึ้น จากเดิม (18 + LVฮีโร่ x 0.5) เป็น 15 หน่วย (+1 ทุก 3 เลเวล)</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item2.png') }}"><br/>
          </li>
          <li>
            <b>Soulreaver</b>
            <p>เพิ่มพลังโจมตีกายภาพลดลงจากเดิม +80 เหลือ +40</p>
            <p>เพิ่มสกิลติดตัว Soul Seeker : การโจมตีหรือใช้สกิลใส่ฮีโร่ศัตรูจะสร้างโบนัสความเสียหายเวท (300+LVฮีโร่x20) และภายใน 3 วินาทีจะโจมตีใส่ฮีโร่แรงขึ้น 10% (เฉพาะระยะใก้ลเท่านั้น) มีคูลดาวน์ 30 วินาที</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item3.png') }}"><br/>
          </li>
          <li>
            <b>Loki's Curse</b>
            <p>พลังเวทลดลงจากเดิม +150 เหลือ +120 +10% ลดคูลดาวน์</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item4.png') }}"><br/>
          </li>
          <li>
            <b>Berith's Agony</b>
            <p>เกราะลดลงจากเดิม +270 เหลือ +225</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item5.png') }}"><br/>
          </li>
          <li>
            <b>Ring of Terror</b>
            <p>ระยะเปิดแมพกว้างขึ้นจากเดิม 10 เมตร เป็น 12 เมตร</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item6.png') }}"><br/>
          </li>
          <li>
            <b>Bracer of Purification</b>
            <p>ระยะของออร่ากว้างขึ้นจากเดิม 5 เมตร เป็น 7 เมตร</p>
            <p>ความเร็วเคลื่อนที่เพิ่มขึ้นจากเดิม 20% เป็นเวลา 1 วินาที เป็น 30% เป็นเวลา 2 วินาที</p>
            <p>เปลี่ยนจากทำให้พันธมิตรวิ่งช้าลง เป็นป้องกันสถานะสโลว์ 2 วินาที</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item7.png') }}"><br/>
          </li>
          <li>
            <b>Gloves</b>
            <p>ราคาลดลง จากเดิม 490 เหลือ 420</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item8.png') }}"><br/>
          </li>
          <li>
            <b>Claves Sancti</b>
            <p>ราคาลดลง จากเดิม 2250 เหลือ 2120</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item9.png') }}"><br/>
          </li>
          <li>
            <b>Ifrit’s Claw</b>
            <p>ราคาลดลง จากเดิม 2070 เหลือ 1960</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item10.png') }}"><br/>
          </li>
          <li>
            <b>Slikk's Sting</b>
            <p>ราคาลดลง จากเดิม 2000 เหลือ 1920</p>
            <img class="rounded-mx-auto" src="{{ asset('asset/img/item11.png') }}"><br/>
          </li>
        </ul>
      </p>
      <b>การเปลี่ยนแปลงของตัวละคร</b><br/>
      <b><p>1.&nbsp;The Flash</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic2.png') }}"><br/></div></p>
      <ul>
        <li>ลดความเร็วเหลือ 380 จากเดิม 400</li>
      </ul>      
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Cyclone)</p></b>
      <ul>
        <li>เพิ่มความแรง 500/750/1000 (+0.6 AP) จากเดิม 450/675/900 (+0.6 AP)</li>
        <li>สตัน 0.5 วินาที และลดความเร็ว 50% 1 วินาที จากเดิม สตัน 1 วินาที</li>
      </ul> 

      <b><p>2.&nbsp;Azzen'ka</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic3.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Sand Trap)</p></b>
      <ul>
        <li>ระยะเวลาที่ศัตรูติดสัญลักษณ์เพิ่มขึ้น จากเดิม 5 วินาที เป็น 6 วินาที</li>
        <li>สตัน 0.5 วินาที และลดความเร็ว 50% 1 วินาที จากเดิม สตัน 1 วินาที</li>
      </ul>  

      <b><p>3.&nbsp;Gildur</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic4.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (The Touch)</p></b>
      <ul>
        <li>การโจมตีครั้งที่ 4 จะผลักศัตรูและสร้างความเสียหาย จากเดิมสร้างความเสียหายเวท 226% AP เป็นสร้างความเสียหายเวท 150% AD + 100% AP</li>
        <li>ทุกสกิลที่ร่ายจะทำให้ได้รับโล่ป้องกัน 160 (LV อัพ+20) + 30% AP</li>
      </ul>    
      
      <b><p>4.&nbsp;Ignis</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic5.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Sacred Flame)</p></b>
      <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Fire Crash จะทำให้ศัตรูติดสัญลักษณ์ไฟทันที เป็นเวลา 3 วินาที หากหลังจากนั้น 
      หากใช้สกิลใส่เป้าหมายที่ติดสัญลักษณ์ จะทำให้สกิลได้รับการเพิ่มความสามารถ รีเฟรชคูลดาวน์ของ Fire Clash และฟื้นฟู HP ให้ตนเองเพิ่มขึ้น 120 หน่วย (+8 หน่วย/LV) (+0.3 พลังโจมตีเวท)</p>

      <ul>
        <li>ความเสียหายเวทลดลงจากเดิม +0.7 พลังโจมตีเวท เป็น +0.5 พลังโจมตีเวท</li>
        <li>เกราะลดลงจากเดิม +0.8 พลังโจมตีเวท เป็นเวลา 3 วินาที เป็น +0.65 พลังโจมตีเวท เป็นเวลา 2 วินาที</li>
        <li>ใช้มานาลดลงจากเดิม 40/45/50/55/60/65 เป็น 30/34/38/42/46/50</li>
        <li>ความกว้างสกิลเพิ่มขึ้นเล็กน้อย</li>
      </ul> 
      
      <b><p>5.&nbsp;Aleister</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic6.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Magic Prison)</p></b>
      <ul>
        <li>ศัตรูจะไม่สามารถขยับตัวได้เลยเมื่อโดนสกิล</li>
        <li>ไม่สามารถใช้เอฟเฟกต์ลบสถานะใดใดลบล้างผลของสกิลนี้ได้ในขณะแสดงผล</li>
      </ul>   

      <b><p>6.&nbsp;Veera</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic7.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Hell Bat)</p></b>
      <ul>
        <li>ระยะสกิลเพิ่มขึ้น จากเดิม 7 เมตร เป็น 7.5 เมตร</li>        
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Kisses)</p></b>
      <ul>
        <li>ระยะสกิลเพิ่มขึ้น จากเดิม 7 เมตร เป็น 7.5 เมตร</li>        
      </ul> 

      <b><p>7.&nbsp;Lauriel</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic8.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Divine Punishment)</p></b>
      <ul>
        <li>ความเร็วเคลื่อนที่ลง 50%-90% (ตามเลเวล)</li>        
      </ul>   

     <b><p>8.&nbsp;Diao Chan</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic9.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Chilling Frost)</p></b>
      <ul>
        <li>สร้างความเสียหายเวทเปลี่ยนแปลงจากเดิม +0.85 พลังโจมตีเวท เป็น +0.75 พลังโจมตีเวท</li>  
        <li>ติดสัญลักษณ์เยือกแข็งนานขึ้นจากเดิม 5.5 วินาที เป็น 6 วินาที สกิลแสดงผลเร็วขึ้น</li>      
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Absolute Zero)</p></b>
      <ul>
        <li>สกิลแสดงผลเร็วขึ้น</li>        
      </ul> 

      <b><p>9.&nbsp;Preyta</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic10.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Plague Tentacles)</p></b>
      <ul>
        <li>ความเร็วโจมตีเพิ่มขึ้นจากเดิม 15% เป็น 20%</li>
        <li>คูลดาวน์ลดลงจากเดิม 45/40/35 เป็น 40/35/30</li>   
        <li>มานาลดลงจากเดิม 130/150/170 เป็น 100/125/150</li>   
      </ul>   

      <b><p>10.&nbsp;Yorn</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic11.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Fierce Shot)</p></b>
      <ul>
        <li>สร้างความเสียหายกายภาพเพิ่มขึ้นจากเดิม 70 เป็น 75 (+4/LV) (+0.4 พลังโจมตีกายภาพ)</li>        
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Explosive Arrow)</p></b>
      <ul>
        <li>สร้างความเสียหายกายภาพเพิ่มขึ้นจากเดิม +0.54 พลังโจมตีกายภาพ เป็น +0.75 พลังโจมตีกายภาพ</li> 
        <li>สตั๊นศัตรูเพิ่มขึ้นจากเดิม 0.75 วินาที เป็น 1 วินาที</li> 
        <li>ระยะเวลาร่ายลดลงเหลือ 0.1 วินาที</li> 
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Heavenly Barrage )</p></b>
      <ul>
        <li>คูลดาวน์เปลี่ยนแปลงจากเดิม 20/19/18/17/16/15 เป็น 18/17.4/16.8/16.2/15.6/15</li> 
        <li>ระยะเวลาร่ายลดลงเหลือ 0.1 วินาที</li> 
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Feel the Sun))</p></b>
      <ul>
        <li>สตั๊นศัตรูเพิ่มขึ้นจากเดิม 0.75 วินาที เป็น 1 วินาที</li> 
        <li>เกราะพื้นฐานเพิ่มขึ้นจากเดิม 88 เป็น 94</li> 
        <li>อัตราฟื้นฟู HP เพิ่มขึ้นจากเดิม 184.9 เป็น 202</li> 
        <li>อัตราการเพิ่มของความเร็วโจมตีลดลงจากเดิม 4% เป็น 3%</li>
        <li>อัตราการเพิ่มของพลังโจมตีลดลงจากเดิม 16.2 เป็น 14.8</li>
        <li>ระยะเวลาร่ายลดลงเหลือ 0.2 วินาที</li> 
      </ul> 

      <b><p>11.&nbsp;Tel'Annas</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic12.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Eagle Eye)</p></b>
      <ul>
        <li>ความเสียหายเวทเปลี่ยนแปลงจากเดิม +0.1 พลังโจมตีกายภาพ เป็น +0.55 พลังโจมตีกายภาพ</li>
        <li>อัตราฟื้นฟู HP เพิ่มขึ้นจากเดิม 176.3 เป็น 190.8</li>         
      </ul>   

      <b><p>12.&nbsp;Valhein</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic13.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Pocket Glaive)</p></b>
      <ul>
        <li>เอฟเฟกต์สตั้นแสดงผลน้อยลงจากเดิม 1 วินาที เป็น 0.75 วินาที</li>
        <li>พลังโจมตีลดลงจากเดิม 100 (+12/LV) เป็น 80 (+10/LV)</li>   
        <li>อัตราการเพิ่มของความเร็วโจมตีลดลงจากเดิม 4% เป็น 3%</li>   
      </ul>   

      <b><p>13.&nbsp;The Joker</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic14.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Lethal Laughing gas)</p></b>
      <ul>
        <li>หลังใช้สกิลจะโจมตีเร็วขึ้น 50%/75%/100% เป็นเวลา 4 วินาที</li>
      </ul> 

      <b><p>14.&nbsp;Violet</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic15.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Tactical Fire)</p></b>
      <ul>
        <li>ความเสียหายกายภาพลดลงจากเดิม 275/315/355/395/435/475 (+1.0 พลังโจมตีกายภาพ) เป็น 275/305/335/365/395/425 (+1.0 พลังโจมตีกายภาพ)</li>
      </ul> 

      <b><p>15.&nbsp;Payna</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic16.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Healing Light)</p></b>
      <ul>
        <li>ฟื้นฟูพลังชีวิตจากเดิม 60 หน่วย (+20/LV) (+0.1 พลังโจมตีเวท) (+10% ของพลังชีวิตที่เสียไป) เป็น 80 หน่วย (+25/LV) (+0.1 พลังโจมตีเวท) (+7% ของพลังชีวิตที่เสียไป)</li>
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Nature’s Rally)</p></b>
      <ul>
        <li>เพิ่มค่าเกราะลดลงจากเดิม 200 หน่วย เป็น 150 (+35/Lv)ติดสตั๊นลดลงจากเดิม 1.5 วินาที เป็น 1.25 วินาที</li>
      </ul> 

      <b><p>16.&nbsp;WuKong</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic17.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Shadow Clone)</p></b>
      <ul>
        <li>คูลดาวน์เปลี่ยนแปลงจากเดิม 15/13.8/12.6/11.4/10.2/9 เป็น 12/11.4/10.8/10.2/9.6/9</li>
      </ul> 

      <b><p>17.&nbsp;Airi</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic18.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Ryu no Ikari)</p></b>
      <ul>
        <li>สตั๊นศัตรูลดลงจากเดิม 1.25 วินาที เป็น 1 วินาที</li>
        <li>พลังโจมตีพื้นฐานเพิ่มขึ้นจากเดิม 159 เป็น 168 </li>
        <li>เกราะพื้นฐานลดลงจากเดิม 105 เป็น 96</li>
        <li>ตำแหน่งหลักเปลี่ยนจากเดิม ไฟต์เตอร์ เป็น แอสซาซิน</li>
      </ul> 

      <b><p>18.&nbsp;Zephys</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic19.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Final Rift)</p></b>
      <ul>
        <li>มานาลดลงจากเดิม 45/50/55/60/65/70 เป็น 30/35/40/45/50/55</li>
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Death from Above)</p></b>
      <ul>
        <li>มานาลดลงจากเดิม 135/150/165 เป็น 100/115/130</li>
      </ul> 

      <b><p>19.&nbsp;Kriknak</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic20.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Fury of Flying Locusts)</p></b>
      <ul>
        <li>ความเสียหายกายภาพลดลงจากเดิม +2.65 พลังโจมตีกายภาพ เป็น +2.60 พลังโจมตีกายภาพ</li>       
      </ul> 

      <b><p>20.&nbsp;Baldum</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic21.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Wild Charge)</p></b>
      <ul>
        <li>ความเสียหายกายภาพเปลี่ยนแปลงจากเดิม +0.2 เกราะ (+0.3 พลังโจมตีกายภาพ) เป็น +0.3 เกราะ (+0.5 พลังโจมตีกายภาพ)</li>
        <li>คูลดาวน์ลดลงจากเดิม 13/12.6/12.2/11.8/11.4/11 เป็น 12/11.6/11.2/10.8/10.4/10</li>      
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Wild Stomp)</p></b>
      <ul>
        <li>ความเสียหายกายภาพเปลี่ยนแปลงจากเดิม +0.05 เกราะ เป็น +0.07 เกราะ</li>       
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Wild Prison)</p></b>
      <ul>
        <li>ศัตรูจะเห็นวงก่อน 0.5 วินาที เป้าหมายที่อยู่ในวงจะวิ่งช้าลง 90% เป็นเวลา 0.6 วินาที</li>       
      </ul> 

      <b><p>21.&nbsp;Slimz</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic22.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Flying Spear)</p></b>
      <ul>
        <li>พลังชีวิตพื้นฐานลดลงจากเดิม 3389 เป็น 3292</li> 
        <li>อัตราการเพิ่มขึ้นของพลังชีวิตลดลงจากเดิม 207.9 เป็น 189</li>     
      </ul> 

      <b><p>22.&nbsp;Wisp</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic23.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Loose Cannon)</p></b>
      <ul>
        <li>ความเสียหายกายภาพเปลี่ยนแปลงจากเดิม +1.15 พลังโจมตีกายภาพ เป็น +0.9 พลังโจมตีกายภาพ</li>
        <li>คูลดาวน์เปลี่ยนแปลงจากเดิม 55/60/65/70/75/80 เป็น 10/9.6/9.2/8.8/8.4/8</li> 
        <li>ความเสียหายจากการยิงระเบิดลดลงจากเดิม 100% เป็น 50%</li> 
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Barrel Bomb)</p></b>
      <ul>
        <li>ความเร็วลูกระเบิดเพิ่มขึ้นจากเดิม 8 เมตร/วินาที เป็น 10 เมตร/วินาที</li>       
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 3 (Shock and Awe)</p></b>
      <ul>
        <li>ความเร็วเคลื่อนที่ศัตรูลดลง 20%</li>
        <li>โจมตีพื้นฐานเพิ่มขึ้นจากเดิม 161 เป็น 171</li>       
      </ul> 

      <b><p>23.&nbsp;Lu Bu</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic24.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Tyrant)</p></b>
      <ul>
        <li>เพิ่มความเร็วโจมตี 10% สะสมได้สูงสุด 5 ครั้ง เป็นเวลา 3 วินาที</li> 
        <li>อัตราการเพิ่มของความเร็วโจมตีลดลงจากเดิม 3% เป็น 2% </li>
        <li>อัตราการเพิ่มของความเร็วโจมตีลดลงจากเดิม 3531 เป็น 3431</li>
      </ul> 

      <b><p>24.&nbsp;Amily</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic25.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Combo)</p></b>
      <ul>
        <li>คูลดาวน์จากเดิม 7/6.8/6.6/6.4/6.2/6 เป็น 6 วินาที ทุกเลเวล</li> 
      </ul> 
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Enrage)</p></b>
      <ul>
        <li>ความเร็วเคลื่อนที่เพิ่มขึ้นจากเดิม 40 หน่วย เป็น 50 หน่วย</li> 
        <li>ต้านทานความเสียหายเพิ่มขึ้นจากเดิม 40/60/80 หน่วย เป็น 50/75/100 หน่วย</li>      
      </ul> 

      <b><p>25.&nbsp;Roxie</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic26.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล Ultimate (Agnie’s Grasp)</p></b>
      <ul>
        <li>รีเซ็ตคูลดาวน์ของสกิลจากเดิม สกิล Wild Fire เป็น สกิล Wild Fire และ Blazing Shield</li> 
        <li>ความเสียหายเวทลดลงจากเดิม 75/100/125 เป็น 40/60/80</li> 
        <li>คูลดาวน์เพิ่มขึ้นจากเดิม 40/36/32 เป็น 45/40/35</li> 
        <li>อัตราฟื้นฟู HP ลดลงจากเดิม 352.8 เป็น 319.2</li> 
      </ul> 

      <b><p>26.&nbsp;Max</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic27.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 1 (Bionic Blender)</p></b>
      <ul>
        <li>ความเร็วเคลื่อนที่เพิ่มขึ้นเพิ่มขึ้นจากเดิม 6% เป็น 10%</li>         
      </ul> 

      <b><p>27.&nbsp;Ormarr</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic28.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Deterrence)</p></b>
      <ul>
        <li>สตั๊นจากเดิม 0.75 วินาที กลายเป็น 0.75~1 วินาทีตาม LV</li>        
      </ul> 

      <b><p>28.&nbsp;Taara</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic29.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Fighting Spirit)</p></b>
      <ul>
        <li>ทุกครั้งที่ใช้สกิลจะสูญเสีย 8% ของ HP ปัจจุบัน</li>  
        <li>ฟื้นฟู 6% ของ HP ที่เสียไปภายใน 3 วินาที หลังจากใช้สกิล</li>      
      </ul> 

      <b><p>29.&nbsp;Kil’Groth</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic30.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิล 2 (Enraged Spear)</p></b>
      <ul>
        <li>ความเสียหายเวทเพิ่มขึ้นจากเดิม 60/100/140/180/220/260 เป็น 75/115/155/195/235/275</li>   
        <li>ความเสียหายเวท(เมื่อใช้สกิล)จากเดิม 50/80/110/140/170/200 เป็น 50/85/120/155/190/225</li>          
      </ul> 
 
      <b><p>30.&nbsp;Thane</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic33.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Royal Power)</p></b>
      <ul>
        <li>เมื่อพลังชีวิตต่ำว่า 30% จะลดความเสียหายที่ได้รับลง 25%</li>     
        <li>ฟื้นฟูพลังชีวิต 24% ของพลังชีวิตสูงสุดภายใน 6 วินาที คูลดาวน์ 75 วินาที</li>  
        <li>ความเร็วพื้นฐานเพิ่มขึ้นจากเดิม 370 เป็น 380</li> 
      </ul> 
      
      <b><p>31.&nbsp;Mortos</p></b>
      <p><div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/pic31.png') }}"><br/></div></p>
      <b><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;สกิลติดตัว (Royal Power)</p></b>
      <ul>
        <li>เกราะเพิ่มขึ้นจากเดิม 28 หน่วย เป็น 88 หน่วย</li> 
      </ul> 
      <p>ขอบคุณเครดิตข้อมูลจาก: Garena ROV Thailand</p>    
    </div> 
  </div>  

  <div class="rightcolumn">    
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion.jpg') }}"><br/><br/></div>     
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion1.jpg') }}"><br/><br/></div>
    <div align="center"><img class="rounded-mx-auto" src="{{ asset('asset/img/promotion2.jpg') }}"><br/><br/></div>
  </div>   
</div>  
@endsection