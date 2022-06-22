import Calculator from "./additional.js";
export default class User{

    constructor() {
        this.data = {
            name:"test",
            sirname:"test2",
        };
    }

    methodOne(){
        console.log(this.data);
    }
    methodTwo(){
        let calculator = new Calculator();
        console.log(calculator.calculate(3,5));
    }

}