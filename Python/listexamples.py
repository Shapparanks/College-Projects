colors = ["RED", "ORANGE", "YELLOW", "GREEN", "BLUE", "INDIGO", "VIOLET"]


def showTitle():
    print("Color Preference Evaluator")

def promptForColor():
    pick = input("Enter a color: ")
    return pick.upper().strip()

def confirmColor(uColor):
    userChoice = input("You chose " + uColor + ". Is this correct? (Y/N) ").upper().strip()
    return userChoice == 'Y'

def containsElement(colorChoice):
    for color in colors:
        if color == colorChoice:
            return True
    return False

def praiseUser(found):
    if found:
        print("Well done! You successfully named a color in the list! ")

def ridiculeUser(found):
    if not found:
        print("Holy guacamole, you are not very good at this are you?")

def main():
    showTitle()
    confirmed = False
    while not confirmed:
        colorChoice = promptForColor()
        confirmed = confirmColor(colorChoice)
    found = containsElement(colorChoice)
    praiseUser(found)
    ridiculeUser(found)

main()