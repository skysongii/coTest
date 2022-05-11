<script>
    


// function hello() {
// 	for(i=0; i<7; i++) {
//         if(i==0) {
//             document.write("#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","#&nbsp&nbsp#######&nbsp","&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp#######");
//         } 
//         else if(i==1 || i==2 || i==4 || i==5) {
//             document.write("<br>#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","#&nbsp #&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp#&nbsp");
//         } 
//         else if(i==3) {
//             document.write("<br>#######&nbsp","&nbsp#####&nbsp&nbsp&nbsp","&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp&nbsp#&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp&nbsp&nbsp&nbsp#&nbsp");
//         } else {
//             document.write("<br>#&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp","&nbsp&nbsp#&nbsp&nbsp#######&nbsp#######&nbsp#######&nbsp#######&nbsp");
//         }
//     }
    
// }
// hello();

// function h() {
//     for(i=0; i<8; i++) {
//         if(i==3) {
//             document.write('#######');    
//         } else {
//             document.write('#<br>');
//         }
//     }
// }
// h();

// var arr_test = [
//     ['Favorite', 'apple'],
//     ['Usally', 'banana'],
//     ['Reluctant', 'watermeleon'],
//     [0, ['platecode', '116하6198']],
//     [1, ['platecode', '101테1234']],
//     [2, ['platecode', '57구9038']]];

// var arr_car = new Array();
// arr_car.push(new Array(['platecode', '101테1234']));
// arr_car.push(new Array(['platecode', '57구9037']));
// arr_car.push(new Array(['platecode', '116하6198']));
// arr_car.push(new Array(['platecode', '07호6616']));
// arr_car.push(new Array(['platecode', '106호3084']));

// // console.log(arr_test);
// // console.log(arr_car);

// var test_temp_arr = new Array();

// // console.log(typeof(arr_test[3][0]));
// com_arr();

// function com_arr() {
//     var test_length = arr_test.length;
//     var str_car = arr_car.toString();
//     arr_car = str_car.split(',');

//     for(i=0; i<test_length; i++) {
//         if(typeof(arr_test[i][0]) == 'number') {
//             test_temp_arr.push(new Array([arr_test[i][1][1]]));
//         } 
//     }
    
//     for(i=0; i<arr_car.length; i++) {
//         for(j=0; j<test_length; j++) {
//             if(arr_car[i] == test_temp_arr[j]) {
//                 console.log(arr_car[i]);
//             }    
//         }
//     }
// }

// var string = new Array();
// string[0] = '이식의트다림 부';
// string[1] = '문화코문';
// string[2] = '제사딩제정 드문';
// string[3] = '는다테입보피초제';
// string[4] = '주돌스니올아동';


// var new_string = new Array();
// new_string.push(['a']);
// var sum = 0;
// for(i=0; i<string.length; i++) {
//     var index = string[i].length;
//     sum += index;
// }
// console.log(sum);


// for(i=0; i<sum; i++) {
//     for(j=0; j<8; j++) {
//         if(string[j][i]=='undefined' || string[j][i]=='') {
//             continue;
//         }
//     }
//     console.log(string[j][i]);
// }

// var test = string.toString();
// console.log(test);
// const fs = require('fs');

// let input = string.toString().trim().split('\n');

// const turnCnt = Math.max(...input.map((i) => i.length));

// let ans = '';

// for (let i = 0; i < turnCnt; i++) {
//   for (let j = 0; j < input.length; j++) {
//     ans += input[j][i] || '';
//   }
// }

// console.log(ans);

// var today = function() {
//     var d = new Date();
//     var output = String(d.getFullYear());
//     var hours = '';
//     var minutes = '';

//     if(String(d.getMonth() + 1).length == 1) {
//         output += '0';
//     }
//     output += String(d.getMonth()+1);
//     if(String(d.getDate()).length == 1) {
//         output += '0';
//     }
//     output += String(d.getDate()+1);
//     if(String(d.getHours()).length == 1) {
//         output += '0';
//     }
//     output += String(d.getHours()+1);
//     if(String(d.getMinutes()).length == 1) {
//         output += '0';
//     }
//     output += String(d.getMinutes()+1);
//     if(String(d.getSeconds()).length == 1) {
//         output += '0';
//     }
//     output += String(d.getSeconds());
    
//     console.log(output.length);
//     console.log(output);
    
//     days =  output[6] + output[7];
//     hours = output[8] + output[9];
//     minutes = output[10] + output[11] + output[12] + output[13];
//     days = parseInt(days);
//     hours = parseInt(hours);
//     minutes = parseInt(minutes);
    
//     console.log(hours);

//     if( 1500 > minutes || 4500 <= minutes) {
//         output[10] = 0;
//         output[11] = 0;
//         if( minutes >= 4500 && hours == 24) {
//             days += 1;
//         }
//         hours = 00;
//     } else {
//         output[10] = 3;
//         output[11] = 0;
//     } 
// }
// today();
</script>