class Person {
    constructor(name, age) {
        this.name = name;
        this.age = age;
    }

    displayInfo() {
        return `Name: ${this.name}, Age: ${this.age}`;
    }

    celebrateBirthday() {
        this.age++;
        return `${this.name} is now ${this.age} years old. Happy Birthday!`;
    }

    changeName(newName) {
        this.name = newName;
        return `Your new name is ${this.name}.`;
    }
}

const person1 = new Person("Atharv", 22);
const person2 = new Person("Piyuhs", 21);

console.log(person1.displayInfo());
console.log(person2.displayInfo());

console.log(person1.celebrateBirthday());
console.log(person2.celebrateBirthday());

console.log(person1.changeName("Alicia"));
console.log(person1.displayInfo());
