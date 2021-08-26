// 標準入力
// const fs = require("fs");
// const input = fs.readFileSync("/dev/stdin", "utf-8").trim();
// const lines = input.split("\n")

const lines = [ '3 2 1', '2 2', '1 2', '1 1' ];

const temp = lines[0].split(' ');
const n = Number(temp[0]);
const value_length = Number(temp[1]);
const value_number = Number(temp[2]);

let valueCount = function(key,value) {
  let n = value.length
  console.log(key);
  console.log(value);
  for (let i = 0; i<n; i++) {
    if(key == value) {
      count = count + 1;
    }
  }
  return count;
}

for (let i = 0; i<n; i++) {
  let s = lines[i + 1].split(' ');
  count = 0;
  for (let t = 0; t<value_length; t++) {
    let p = s[t];
    let count = valueCount(value_number,p);
  }
  console.log('<<<回答>>>');
  console.log(count);
}

// 正解
const n = Number(lines[0].split(" ")[0]);
const m = Number(lines[0].split(" ")[1]);
const k = lines[0].split(" ")[2];

for (let i = 1; i <= n; i++) {
  let count = 0;
  const numbers = lines[i].split(" ");
  for (let j = 0; j < m; j++) {
    if (k === numbers[j]) {
      count += 1;
    }
  }
  console.log(count);
}
