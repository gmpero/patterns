class Dog:
    def speak(self):
        return "Woof!"


class Cat:
    def speak(self):
        return "Meow!"


def animal_factory(animal_type):
    match animal_type:
        case "cat" : return Cat()
        case "dog" : return Dog()



def main():
    animal1 = animal_factory("dog")
    animal2 = animal_factory("cat")

    print(animal1.speak())
    print(animal2.speak())


if __name__ == "__main__":
    main()
