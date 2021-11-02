def start():
    pass
print("Welcome to the Python Guessing Game.")
print("I am currently thinking of an animal for you to guess...")
animal = "Dog"

# 'while' loop
while animal := "Dog":
    userchoice = input("Ok, I got one! Try and guess which animal I am thinking of: ")
    if userchoice == animal.lower() or animal.upper():
        print("Congratulations, you guessed correctly. Well done!")
        break
    elif userchoice[0] == "Q" or userchoice[0] == "q":
        print("Try again soon!")
        break
    else:
        print("I'm sorry, that is incorrect. Try again!")

#Asking the user whether they liked the animal of choice or not.
opinion = input("Do you like the animal I am thinking of? Yes or No? ")

if opinion == "Yes" or opinion == "yes":
    print("I'm so happy you agree!")

elif opinion == "No" or opinion == "no":
    print("well everyone has their own favorite!")
else:
    print("That bad huh...")


    start()

