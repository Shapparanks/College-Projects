import sys


def getUserInput():
    fileName = input("File Name (please include .txt extension): ")
    return fileName


def ReadUserFileAndCreateDictionary(fileName):
    wordsDictionary = {}
    fullFileName = sys.path[0] + '//' + fileName
    with open(fullFileName, "r") as myFile:
        lines = myFile.readlines()
        for i in range(0, len(lines), 2):
            wordsDictionary[lines[i].strip().lower()] = lines[i + 1].strip().lower()
    return wordsDictionary


def main():
    fileName = getUserInput()
    wordsDictionary = ReadUserFileAndCreateDictionary(fileName)
    while True:
        userWord = input("For what word would you like to know the definition?: ").strip().lower()
        if userWord == "":
            break
        elif userWord in wordsDictionary:
            print("The definition for " + userWord + " is: " + wordsDictionary[userWord])
        else:
            print("Sorry, but our dictionary isn't quite complete and we don't have that word entered yet")


main()
