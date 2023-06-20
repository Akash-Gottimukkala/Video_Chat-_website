<html>
<head>
  <script src='https://cdn.scaledrone.com/scaledrone.min.js'></script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <style>
    body {
      background: #000000;
      display: flex;
      height: 100vh;
      margin: 0;
      align-items: center;
      justify-content: center;
      padding: 0 50px;
      font-family: -apple-system, BlinkMacSystemFont, sans-serif;
    }
    
    video {
  

      max-width: calc(50% - 100px);
    
      margin: 0 50px;
      box-sizing: ;
      border-radius: 20px;
      border-color: red;
      padding: 10;
      background: white;
      box-shadow: 0 0 20px #fff;

    }
    video:hover{
      cursor: pointer;
      box-sizing: border-box;
      }
    
    .copy {
      position: fixed;
      top: 10px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 50px;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
      color: white;
      text-decoration: underline;
    text-decoration-color: red;
    text-decoration-thickness: 2px;
    text-decoration-style: wavy;
    text-shadow: 2px 2px 2px #fff;
    }
   .copy > span {
    color: red;
    font-size: 70px;  
    font-weight: bold;  
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    text-shadow: 2px 2px 2px #fff;
    
    }
    .copy > span:hover {
      color: #fff;
      text-shadow: 2px 2px 2px red;
      cursor: pointer;
    }
    .main{
      position: relative;
      display: inline-block;
      text-align: center;
      
    }
  
    
    footer{
      position:fixed;
      text-align: center;
  bottom:0;
  left:0;
  width:100%;
  height: 50px;
  font-size: 30px;
  color: #fff;
      font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    }
 
  </style>
</head>
<body>
  
  <div class="copy" ><span>V</span>ideo <span>C</span>hat <span>W</span>ebsite</div>

  <video id="localVideo" autoplay muted></video>
  <video id="remoteVideo" autoplay></video>
  
  
  <script src="script.js"></script>
  <br><br><br>
    
  <footer>Made By :- G Akash (NIT Rourkela)</footer>
</body>
</html>