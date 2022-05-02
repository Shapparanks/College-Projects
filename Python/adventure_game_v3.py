def visitlocation(locale, score, Continue):
    print(locale)
    print("Score:", score)
    input(Continue)

def ad_game():
    title = "Welcome to the spine chilling adventure through the abandoned insane asylum!"
    print()
    print(title)
    print()
    name_prompt = "Please enter your name: "
    friend1 = "Please enter a friends name (Male): "
    friend2 = "Please enter one other friends name (Female): "
    name = input(name_prompt)
    age = "Please enter your age: "
    age_num = input(age)
    name2 = input(friend1)
    name3 = input(friend2)
    Continue = "Press enter to continue!"
    print()
    print("Welcome,", end=" ")
    print(name, end=" ")
    print("!")

    p1 = '''The goal of this game is to reach the end of the adventure with 100 points.
You start with 0 points, but with the rooms your character goes through, you will earn 25 points.
Good Luck!'''
    Locale1 = '''
    This story began when you were ''' + age_num + ''' and you got separated from your 2 friends.
You were being chased by a dark figure in an abandoned insane asylum. As you were running, you stumble
upon two doors, the left stating, "SURGICAL ROOM"  and the right stating "SHOWERS".
You find going into a surgical room would be ominous, so you decide to go to the showers.
As you are walking through, you can hear someone mumbling as if they had their mouth taped shut.
You walk over and you see your friend, ''' + name2 + ''', tied up with a cloth in his mouth. You untie him and ask him
if hes ok. He says to you, "Thank you ''' + name + ''', you saved my life".
'''
    Locale2 = '''
    You and ''' + name2 + ''' make your way out of the showers and enter the cafeteria,you notice that there
is a very sweet smell in the air. You both look at each other with confused expressions,but you keep moving.
You notice a dim light in the kitchen and you both start to move towards it. As you peak over
the counter you see a goblin cooking something in a VERY large pot. You also see some matches on the counter and you
quickly grab them. The smell that was aerating from the pot was like going to a candy store.
You notice a strange noise coming from the pot, it almost sounds like someone is trying to yell. You realize
that smell is ''' + name3 + ''''s perfume. You and ''' + name2 + ''' jump over and kick the goblin into the wall.
You open the pot and luckily the liquid inside was warm and not boiling. You pull her out and she says,
"I thought I was going to get killed... AND EATEN BY A F**KING GOBLIN..." After she calmed down a little she then
said, " ''' + name + ''', thank you. I really don't know what I would have done without you.
'''
    Locale3 = '''
    After that very odd experience in the cafeteria, you all tried to make your way out of the asylum.
Eventually, you all come across another hallway with two doors, one stating, "CELLS" and the other
stating, "LAUNDRY". You think to yourself, "They wouldn't put the exit near the cells, so I think we should go through
the laundry room." After you tell ''' + name2 + ''' and ''' + name3 + ''' about your idea, they agree and you walk
in. The instant you open the door you see one of the washers on. You all get chills down,
but you keep moving because of all the other weird stuff you've seen so far.
All the sudden, the door you all went through opens and the dark figure from before starts sprinting
towards you all. All of you start running in the opposite direction and go through another door. You see a piece of
metal on the ground and you lock out the dark figure.
'''
    Locale4 = '''
    Since you all were trying to get out of there so quickly, you didn't see which room everyone was going into.
The room is dark with no windows and doesn't smell quite right. You realize you got matches from the cafeteria, so
you light one and see that you are in the cremation room. This room has no other doors besides the one everyone went
through. You start to hear very loud banging and it was the figure from before trying to get in. You can't escape the
room your in, and ''' + name3 + ''' starts to freak out. Both you and ''' + name2 + ''' try to calm her down,
but she's starting to get really anxious. All the sudden the door get's kicked and the dark figure starts to
approach you. You and your two friends are all shaking thinking that your going to die. The dark figure gets closer and
closer. You light one more match and see an old man in a trench coat. He clears his throat and says, "Do you know
how long I have been trying to get you out of this place. It's very creepy here at night. " You look at both of your
friends and start hysterically laughing. The old man helps you get out of the asylum in one piece and you get home safe
and sound.'''

    score = 0
    print()

    visitlocation(p1, score, Continue)
    score = score + 25

    visitlocation(Locale1, score, Continue)
    score = score + 25

    visitlocation(Locale2, score, Continue)
    score = score + 25

    visitlocation(Locale3, score, Continue)
    score = score + 25

    visitlocation(Locale4, score, Continue)
    score = score + 25

    ending = "Congratulations, you made it out! Please play again!"
    print()
    print(ending)

    crs = '''
COPYRIGHT STATEMENT: THIS GAME WAS MADE BY JACOB SHAPIRO FEBRUARY 2020.
NONE OF THIS WORK WAS USED BY ANY OTHER CODE WRITER.
I WORKED ALONE'''
    print(crs)


ad_game()
