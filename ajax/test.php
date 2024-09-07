<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div id="content"></div>
  <button onclick="gettestData()">get data</button>

  <script>
    function gettestData(){
      let c =document.getElementById('content');
      let nxhr = new XMLHttpRequest();
    
      nxhr.open('GET' , 'https://reqres.in/api/users?page=1' , true);
      nxhr.onload = function(){
        let d = nxhr.responseText
        console.log(d.data);
        
        c.innerHTML = nxhr.responseText ;
      }
      nxhr.send();
    }
    // function gettestData(){
    //   let c =document.getElementById('content');
    //   let nxhr = new XMLHttpRequest();
    
    //   nxhr.open('GET' , 'anotherpage.php' , true);
    //   nxhr.onload = function(){
    //     c.innerHTML = nxhr.responseText ;
    //   }
    //   nxhr.send();
    // }
  </script>
</body>
</html>