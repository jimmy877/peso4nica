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

}