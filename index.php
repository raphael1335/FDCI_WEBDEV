<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>ASSIGNMENT FOR TUESDAY</title>
    <script>
        function calcFibo () {
            var num1 = 0, next_num, i;
            var num2 = 1;
            let inputNum = document.getElementById('limit').value;
            clearVal();
                for (i=0;i<=inputNum;i++){
                    next_num = num1 + num2;
                    num1 = num2;
                    num2 = next_num;
                    console.log("Fibonacci : " + next_num);
                    document.getElementById("next_num").innerHTML +="Fibonacci : "+ num1 + "<br>";
                }
        }
        function clearVal(){
            document.getElementById("next_num").innerHTML = "";
        }
        function checkQuarantine () {
            var string1 = 'You are too young. Stay Inside mah NIggguHHH!';
            var string2 = 'LESSSSGAAAAAAAAAWWWWWWWWWW';
            var string3 = 'You are too old ma homieee. Stay Inside mah NIggguHHH!';
            var string4 = 'input number mah nigguhhh';
            let inputAge = document.getElementById('age').value;

            if (inputAge <= 21 && inputAge != 0 ){
                console.log('You are too young. Stay Outside!');
                document.getElementById("output").innerHTML = string1;
            }else if(inputAge > 21 && inputAge < 65){
                console.log('Lesgawwww');
                document.getElementById("output").innerHTML = string2;
            }else if(inputAge >= 65){
                console.log('You are too old. Stay Outside!');
                document.getElementById("output").innerHTML = string3;
            }else if(inputAge == ''){
                console.log('input number mah nigguhhh');
                document.getElementById("output").innerHTML = string4;
            }
            
        }
    </script>
</head>
<body>
    <input type="text" id="limit">
    <button onclick="calcFibo();" >FUBU NACCI</button>
    <div id="next_num">  </div>


    <input type="text" id="age">
    <button onclick="checkQuarantine()">WAZZUP NIGGA?</button>
    <div id="output"></div>
  
</body>
</html>