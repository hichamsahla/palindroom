<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1 style="text-align: center; color: darkblue;">Test of het een palindroom is !!</h1><br>

<input  type="text" id="input1" name="input1" value="" placeholder="Test palindroom" onkeyup="palindroom(  document.getElementById('input1').value )">
<span id="answer"></span>
<script>
    function palindroom(str) {

        const charCount = {};
        var display = "";



                   for (const ch of str.toLowerCase()) {
                          if (/[^a-z0-9]/.test(ch)) {
                             continue;
                      }
                                  display += ch;
                            if (charCount[ch]) {
                           charCount[ch] += 1;
                      } else {
                               charCount[ch] = 1;
            }
        }
                  let oddCount = 0;
                for (const prop in charCount){
                 if (charCount[prop] % 2 === 1){
                     oddCount += 1;
                       }
                  }
                  console.log();
                      console.log(charCount);
                  console.log(oddCount > 1 ? false : true);
        if (oddCount > 1 || str == "")
        {
            document.getElementById("answer").innerHTML =  " geen palindroom.";
        }
        else {
            document.getElementById("answer").innerHTML =  " wel palindroom.";
        }

    }
</script>
</body>
</html>