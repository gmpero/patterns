class Animal:
    def __init__(self, name):
        self.name = name


def dog_speak():
    return "Woof!"


def cat_speak():
    return "Meow!"


def animal_factory(animal_type):
    if animal_type == "dog":
        return lambda name: Animal(name + " the Dog")
    elif animal_type == "cat":
        return lambda name: Animal(name + " the Cat")
    else:
        return None


def main():
    create_dog = animal_factory("dog")
    create_cat = animal_factory("cat")

    dog = create_dog("Tuzic")
    cat = create_cat("Murzic")

    print(f"{dog.name} says: {dog_speak()}")
    print(f"{cat.name} says: {cat_speak()}")


if __name__ == "__main__":
    main()
