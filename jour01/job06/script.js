function fizzbuzz();  //ont appel la fonction fizzbuzz
for (let i=1; i<151; i++) {
    if ((i%3===0)&&(i%5!=0)) console.log("Fizz")//si le nombre est un multiple de 3, ont affiche 'FIZZ'
    if ((i%5===0)&&(i%3!=0)) console.log("Buzz")//si le nombre est un multiple de 5, ont affiche 'BUZZ'
    if ((i%3===0)&&(i%5===0)) console.log("FizzBuzz")//si le nombre est un multiple de 3 et de 5, ont affiche 'FIZZBUZZ'
    if ((i%3!=0)&&(i%5!=0)) console.log(i)
}
// retourne la fonction
fizzbuzz();