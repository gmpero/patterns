def prototype_factory(obj):
    def clone():
        return obj.copy()

    return clone


original_object = {"key": "value"}

clone_object1 = prototype_factory(original_object)
clone_object2 = prototype_factory(original_object)

print(clone_object1())
print(clone_object2())
