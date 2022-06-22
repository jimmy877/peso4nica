export default class Calculator{
     constructor() {
          this.A = null;
          this.B = null;
     }
     calculate(a,b){
         this.A = Number(a);
         this.B = Number(b);
         return this.A+this.B;
     }
}