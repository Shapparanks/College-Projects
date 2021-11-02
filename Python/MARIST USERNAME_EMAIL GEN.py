# CMPT 120 Intro to Programming
# Lab #5 – Working with Strings and Functions
# Author: Jacob Shapiro
# Created: 2020-3-19


uNames = []

pwds = []

def username():
    # get user's first and last names

    first = input("Enter your first name: ").lower()

    last = input("Enter your last name: ").lower()

    return first, last


def MstyleU():
    first, last = username()

    uname = first + "." + last

    uNames.append(uname)

    counts = uNames.count(first + "." + last)

    return counts


def checkStrength(pwd):
    if len(pwd) < 8 or pwd.lower() == pwd or pwd.upper == pwd:
        print("Sorry, but your password needs to be stronger.")
        return False
    else:
        print("Password Confirmed")
        return True


def register(times):
    counts = MstyleU()

    pwdAcceptable = False

    while not pwdAcceptable:
        passwd = input("Create a new password: ")

        pwdAcceptable = checkStrength(passwd)

    print("Account configured. Your new email address is",

          uNames[-1] + str(counts) + "@marist.edu. You student ID is " + str(times))

    pwds.append(passwd)


def main():
    times = 1

    while True:
        register(times)

        times += 1


main()