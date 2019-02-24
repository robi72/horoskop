<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>Page Title</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <script src="script.js"></script>
</head>
<body>
     
</body>
</html>


<body>

     <div>
          <h3>Välj månad och dag när du är född</h3>
     </div>
   
    
     <select name='month' id="month" method="POST">
          <option value="" style="display:none;"></option>
          <option value='Januari'>Januari</option>
          <option value='Februari'>Februari</option>
          <option value='Mars'>Mars</option>
          <option value='April'>April</option>
          <option value='Maj'>Maj</option>
          <option value='Juni'>Juni</option>
          <option value='Juli'>Juli</option>
          <option value='Augusti'>Augusti</option>
          <option value='September'>September</option>
          <option value='Oktober'>Oktober</option>
          <option value='November'>November</option>
          <option value='December'>December</option>
     </select>



         

     <select name='day' id="day" method="POST">
          <option value="" style="display:none;"></option>
          <option value='1'>01</option>
          <option value='2'>02</option>
          <option value='3'>03</option>
          <option value='4'>04</option>
          <option value='5'>05</option>
          <option value='6'>06</option>
          <option value='7'>07</option>
          <option value='8'>08</option>
          <option value='9'>09</option>
          <option value='10'>10</option>
          <option value='11'>11</option>
          <option value='12'>12</option>
          <option value='13'>13</option>
          <option value='14'>14</option>
          <option value='15'>15</option>
          <option value='16'>16</option>
          <option value='17'>17</option>
          <option value='18'>18</option>
          <option value='19'>19</option>
          <option value='20'>20</option>
          <option value='21'>21</option>
          <option value='22'>22</option>
          <option value='23'>23</option>
          <option value='24'>24</option>
          <option value='25'>25</option>
          <option value='26'>26</option>
          <option value='27'>27</option>
          <option value='28'>28</option>
          <option value='29'>29</option>
          <option value='30'>30</option>
          <option value='31'>31</option>
     </select>


<p id="horoscope_sign"></p>



<button onclick="saveHoroscope(); hide()" id="save">spara mitt horoskop</button><br>

<button onclick="updateHoroscope()">uppdatera mitt horoskop</button><br>

<button onclick="deleteHoroscope(); refreshPage()">radera mitt horoskop</button>


</body>
</html>