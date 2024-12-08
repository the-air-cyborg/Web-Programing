
//program to demonstrate array destructuring and arrow functions 
 
//array destructuring 
let colors = ['red', 'green', 'blue', 'violet', 'black']; 
let [value1, value2,,, value3] = colors;  //array destructuring using [] 
console.log('Colors after destructuring'); 
console.log(value1, value2, value3); 
 
//object destructuring 
let obj = { 
    id: 123, 
    sname: 'ABC', 
    percent: 94 
}; 
let { id, sname, percent } = obj;   //object destructuring using {} 
console.log('Object after destructuring'); 
console.log(id, sname, percent); 
 
//arrow function 
//function to calculate factorial 
 
/* let fact=(n)=>{ 
    let f=1; 
    for (let i = 2; i <= n; i++) { 
        f *= i; 
    } 
    return f; 
}; 
 */ 
 
let fact = (n) => (n == 0 ? 1 : n * fact(n - 1)); 
console.log(`Factorial of 5 is ${fact(4)}`); 