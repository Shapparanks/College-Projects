# Global Score to be used in any function.
score = 0
# Global list of descriptions for locales
globlist = ['''
LOBBY: You walk up a large staircase. You are looking around and see someone
running towards you. You get scared and you decide to run towards a hallways. There are four doors,
which one will you chose?
''', '''
SURGICAL ROOM: You find a rusty scalpel and decide to pick it up just as a precaution. There is a very off smell
in the room that is really bugging you. You see blood on the tables, the walls and the floor. You get nervous and
you start to look around the room for a way out. There are four doors, which one will you chose?
''', '''
CAFETERIA: The first detail of the room that you notice is that the kitchen lights are on. You decide
to go back there and you see a pot boiling on the stove. Soon, the door that you came through opens again and it's the
figure from before. You think to yourself, "Holy shit, not this again." In the back of the kitchen there are four doors,
which one will you chose?
''', '''
SHOWERS: There is a smell of mold and must in the air. You get an ominous feeling while your in there
because two of the showers are on. Suddenly, someone starts humming a song and you get the chills. You decide you need
to get out. There are four doors, which one will you chose?
''', '''
CELL AREA: You walk down a long hallway filled with what looked like jail cells. The hallway seemed to be getting longer
before your very eyes. Suddenly, you hear a noise from behind you. You immediately start to run as fast as you can.
You feel someones presence getting closer and closer. Finally, the end of the hallway is starting to come to light.
There are four doors, which one will you chose?
''', '''
FINAL ROOM (THE LAUNDRY ROOM) You walk in and there are old clothes and towels everywhere. You start thinking to
yourself, "I have to find a way out of here." You start looking around the room and notice that someone is standing in
thee corner. You mumble nervously, "H-Hello?" The person turns around and goes through you. It felt like someone just
pushed you back. You fall down, hit your head, leaving you unconscious on thee floor. You wake up in a bed in one of the
cells and it's morning. You notice you have a white outfit on and your cell is closed. Then you finally realize, That
entire experience was a dream. You are in the insane asylum and have been for 2 years now.
''']
locationlist = ["You are now in Lobby.",
"You are now in the Surgical Room.",
"You are now in the Cafe.",
"You are now in the Showers.",
"You are now in the Cell area.",
"You are now in the Laundry room"]
Currentlocale = globlist[0]
visitedLocations = []


# Press Enter to Continue (Advance through the story)
def cont(Enter):
    input(Enter)


# Player Customization and introduction w/t title
def game_custom():
    print("Welcome to the spine chilling adventure through the abandoned insane asylum!")
    print()
    name_prompt = "Please enter your name: "
    name = input(name_prompt)
    attrib_prompt = "Please enter your desired attribute: "
    attribute = input(attrib_prompt)
    print()
    print("Welcome,", end=" ")
    print(name, end=" the ")
    print(attribute, end="")
    print("!")
    print()
    intro = '''
Intro: The goal of this game is to reach the end of the adventure with 150 points. Throughout the storyline,
you will be able to chose where to go using the directions, north, south, east, and west.
You start with 0 points, but with the rooms you go through, you will earn 25 points. Good Luck!
'''
    print(intro)
    visitlocation0()


# Score and Location title when you reach a new locale
def score_Locale(Locationindex):
    global score
    print()
    print(locationlist[Locationindex])
    print()
    print("Current Score:", score)
    print()


# Defined locals to visit throughout game
def visitlocation0():
    global score
    visitedLocations.append("Lobby")
    score_Locale(0)
    print(globlist[0])


def visitlocation1():
    global Currentlocale
    global score
    if "Surgical Room" not in visitedLocations:
        score = score + 25
        visitedLocations.append("Surgical Room")
    score_Locale(1)
    print(globlist[1])


def visitlocation2():
    global Currentlocale
    global score
    if "Cafe" not in visitedLocations:
        score = score + 25
        visitedLocations.append("Cafe")
    score_Locale(2)
    print(globlist[2])


def visitlocation3():
    global Currentlocale
    global score
    if "Showers" not in visitedLocations:
        score = score + 25
        visitedLocations.append("Showers")
    score_Locale(3)
    print(globlist[3])


def visitlocation4():
    global Currentlocale
    global score
    if "Cell Area" not in visitedLocations:
        score = score + 25
        visitedLocations.append("Cell Area")
    score_Locale(4)
    print(globlist[4])


def visitlocation5():
    global Currentlocale
    global globlist
    global score
    if "Final" not in visitedLocations:
        score = score + 25
        visitedLocations.append("Final")
    score_Locale(5)
    print(globlist[5])


def user():
    return input("Which way will you go? ").lower()


# Game loop to take you to each location (THIS IS NOT CORRECT YET!)
def game_loop():
    while True:
        global globlist
        global Currentlocale
        global score
        usercommand = user()
        if usercommand == "help":
            print('''
            Directions: north, south, east, and west.
            Commands: Quit- Exits game.  Help: Shows list of commands''')
        elif usercommand == "quit":
            break
        elif score == 100 and usercommand in ["north", "south", "east", "west"]:
            Currentlocale = globlist[5]
            visitlocation5()
            break
        elif usercommand == "north" or usercommand == "south" or usercommand == "east" or usercommand == "west":
            if Currentlocale == globlist[0]:
                if usercommand == "north":
                    Currentlocale = globlist[1]
                    visitlocation1()
                elif usercommand == "east":
                    Currentlocale = globlist[2]
                    visitlocation2()
                else:
                    print("Uh oh! The door is locked! Chose a different direction.")
            elif Currentlocale == globlist[1]:
                    if usercommand == "south":
                        Currentlocale = globlist[0]
                        visitlocation0()
                    elif usercommand == "west":
                        Currentlocale = globlist[2]
                        visitlocation2()
                    else:
                        print("Uh oh! The door is locked! Chose a different direction.")
            elif Currentlocale == globlist[3]:
                    if usercommand == "north":
                        Currentlocale = globlist[4]
                        visitlocation4()
                    elif usercommand == "west":
                        Currentlocale = globlist[2]
                        visitlocation2()
                    else:
                        print("Uh oh! The door is locked! Chose a different direction.")
            elif Currentlocale == globlist[2]:
                    if usercommand == "south":
                        Currentlocale = globlist[4]
                        visitlocation4()
                    elif usercommand == "west":
                        Currentlocale = globlist[0]
                        visitlocation0()
                    else:
                        print("Uh oh! The door is locked! Chose a different direction.")
            elif Currentlocale == globlist[4]:
                    if usercommand == "north":
                        Currentlocale = globlist[3]
                        visitlocation3()
                    elif usercommand == "west":
                        Currentlocale = globlist[2]
                        visitlocation2()
                    else:
                        print("Uh oh! The door is locked! Chose a different direction.")
            elif Currentlocale == globlist[5]:
                    if usercommand == "south":
                        Currentlocale = globlist[4]
                        visitlocation4()
                    elif usercommand == "west":
                        Currentlocale = globlist[3]
                        visitlocation3()
                    else:
                        print("Uh oh! The door is locked! Chose a different direction.")

        else:
            print("Invalid Choice! Please type in a valid command or type ""Help"" to show valid commands.")


# Ending of Adventure Game
def end():
    Ending = "You reached the end of this lucid story. Please play again!"
    print()
    print(Ending)
    crs = '''
(C) COPYRIGHT STATEMENT: THIS GAME WAS MADE BY JACOB SHAPIRO FEBRUARY 2020.
NONE OF THIS WORK WAS USED BY ANY OTHER CODE WRITER.
Had help from father's co-worker'''
    print()
    print(crs)


def main():
    Enter = "Press enter to continue."
    game_custom()
    game_loop()
    end()

main()