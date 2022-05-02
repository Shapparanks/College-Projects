def enter():
    input("Press enter to continue")


def ad_game():
    points = 25

    print('''
    Welcome to the spine chilling adventure through the abandoned insane asylum!
''')
    name = input("Enter your character's name: ")
    age = input("Enter your characters age: ")
    friend1 = input("Enter a your first friend's name(male): ")
    friend2 = input("Enter your second friend's name(female): ")

    print('''
    The goal of this game is to reach the end of the adventure with 100 points.
You start with 0 points, but with the rooms your character goes through, you will earn 25 points.
Good Luck!
''')
    enter()

    print('''
    Welcome ''' + name + '''! This story began when you were ''' + age + ''' and you got separated from your 2 friends. 
You were being chased by a dark figure in an abandoned insane asylum. As you were running, you stumble
upon two doors, the left stating, "SURGICAL ROOM"  and the right stating "SHOWERS".
You find going into a surgical room would be ominous, so you decide to go to the showers.
As you are walking through, you can hear someone mumbling as if they had their mouth taped shut. 
You walk over and you see your friend, ''' + friend1 + ''', tied up with a cloth in his mouth. You untie him and ask him
if hes ok. He says to you, "Thank you ''' + name + ''', you saved my life".
''')
    print("Nice work, you have earned", points, "points!")
    enter()
    print('''
    You and ''' + friend1 + ''' make your way out of the showers and enter the cafeteria, 
you notice that there is a very sweet smell in the air. You both look at each other with confused expressions,
but you keep moving. You notice a dim light in the kitchen and you both start to move towards it. As you peak over
the counter you see a goblin cooking something in a VERY large pot. You also see some matches on the counter and you 
quickly grab them. The smell that was aerating from the pot was like going to a candy store.
You notice a strange noise coming from the pot, it almost sounds like someone is trying to yell. You realize
that smell is ''' + friend2 + ''''s perfume. You and ''' + friend1 + ''' jump over and kick the goblin into the wall.
You open the pot and luckily the liquid inside was warm and not boiling. You pull her out and she says, 
"I thought I was going to get killed... AND EATEN BY A F**KING GOBLIN..." After she calmed down a little she then
said, " ''' + name + ''', thank you. I really don't know what I would have done without you.
''')
    print("You saved " + friend2 + " from the goblin! You now have", points * 2, "points!")
    enter()
    print('''
    After that very odd experience in the cafeteria, you all tried to make your way out of the asylum.
Eventually, you all come across another hallway with two doors, one stating, "CELLS" and the other 
stating, "LAUNDRY". You think to yourself, "They wouldn't put the exit near the cells, so I think we should go through
the laundry room." After you tell ''' + friend1 + ''' and ''' + friend2 + ''' about your idea, they agree and you walk 
in. The instant you open the door you see one of the washers on. You all get chills down, 
but you keep moving because of all the other weird stuff you've seen so far. 
All the sudden, the door you all went through opens and the dark figure from before starts sprinting
towards you all. All of you start running in the opposite direction and go through another door. You see a piece of 
metal on the ground and you lock out the dark figure.  
''')
    print("You escaped the dark figure! You now have", points * 3, "Points!")
    enter()
    print(''' 
    Since you all were trying to get out of there so quickly, you didn't see which room everyone was going into.
The room is dark with no windows and doesn't smell quite right. You realize you got matches from the cafeteria, so 
you light one and see that you are in the cremation room. This room has no other doors besides the one everyone went
through. You start to hear very loud banging and it was the figure from before trying to get in. You can't escape the
room your in, and ''' + friend2 + ''' starts to freak out. Both you and ''' + friend1 + ''' try to calm her down,
but she's starting to get really anxious. All the sudden the door get's slammed open and the dark figure starts to 
approach you. You and your two friends are all shaking thinking that your going to die. The dark figure gets closer and 
closer. You light one more match and see an old man in a trench coat. He clears his throat and says, "Do you know
how long I have been trying to get you out of this place. It's very creepy here at night. " You look at both of your
friends and start hysterically laughing.
''')
    print("Finally you let the old man help you all out! You earned", points * 4, "points!")
    print('''
The old man helps you get out of the asylum in one piece and you get home safe and sound.

The End! ''')
    enter()
    print('''
COPYRIGHT STATEMENT: THIS GAME WAS MADE BY JACOB SHAPIRO ON FEBRUARY 6th, 2020
NONE OF THIS WORK WAS USED BY ANY OTHER CODE WRITER
I WORKED ALONE''')


ad_game()
