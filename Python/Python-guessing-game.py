def start():
    print("Welcome to the Python Guessing Game.")
    print()
    print("I am currently thinking of an animal for you to guess...")
    print()
animal = "dog"


def guessingloop():
    while True:
        userchoice = input("Ok, I got one! Try and guess which animal I am thinking of: ").lower()
        if userchoice == animal:
            print("Congratulations, you guessed correctly. Well done!")
            while userchoice == animal:
                opinion = input("Do you like that animal that I am thinking of? Yes or No?").lower()
                if opinion[0] == "y":
                    print("I'm so happy you agree!")
                    break
                elif opinion[0] == "n":
                    print("Well, everyone has their own favorites!")
                    break
                else:
                    print("That bad huh...")
            break
        elif userchoice[0] == "q":
            print("Try again soon!")
            break
        else:
            print("I'm sorry, that is incorrect. Try again!")

#Asking the user whether they liked the animal of choice or not.
def main():
    start()
    guessingloop()

main()




