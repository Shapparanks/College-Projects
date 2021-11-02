import random

class Card(object):
    def __init__(self, suit, val):
        self.suit = suit
        self.value = val

    def __unicode__(self):
        return self.show()

    def __str__(self):
        return self.show()

    def __repr__(self):
        return self.show()

    def show(self):
        if self.value == 1:
            val = "Ace"
        elif self.value == 11:
            val = "Jack"
        elif self.value == 12:
            val = "Queen"
        elif self.value == 13:
            val = "King"
        else:
            val = self.value

        return "{} of {}".format(val, self.suit)


class Deck(object):
    def __init__(self):
        self.cards = []
        self.makeup()

    # Display all cards in the deck
    def show(self):
        for card in self.cards:
            card.show()

    # Generate 52 cards
    def makeup(self):
        self.cards = []
        for suit in ['Hearts', 'Clubs', 'Diamonds', 'Spades']:
            for val in range(1, 14):
                self.cards.append(Card(suit, val))

    # Shuffle the deck
    def shuffle(self):

        random.shuffle(self.cards)
    def deal(self):
        return self.cards.pop()


class Player(object):
    def __init__(self, name):
        self.name = name
        self.card = []

    def Hello(self):
        print("Hi {}".format(self.name))
        return self

    def getCard(self, deck, num=1):
        for _ in range(num):
            card = deck.deal()
            if card:
                self.card.append(card)
            else:
                return False
        return True

    def showCard(self):
        print("Your Card: {}".format(self.card))
        return self



myDeck = Deck()
myDeck.shuffle()
Mr_Tidd = Player("Mr.Tidd")
Mr_Tidd.Hello()
Mr_Tidd.getCard(myDeck, 1)
Mr_Tidd.showCard()