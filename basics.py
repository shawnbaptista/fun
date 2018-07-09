#!/usr/bin/python

# Importing "sys" will allow access to inputting arguments from command line
import sys

# Print is supplied on the command line after the file
# Ex. ./filename.py printThis
print sys.argv[1]

# This next statement will print on the next line; no need to supply a line break -- unlike PHP
print "hey"

test = "Printed text from a variable"

print test

# Negative indices count from the right
newWord = "stringyboi"
print newWord[-1]
print newWord[-2]
print newWord[-3]

# Multiply the occurrences of a string, concatenated together, and assign to a variable
mumble = 8 * "blah"
print mumble

# Slicing. Obtain substring from a string 
slicing = "Python"
print slicing

sliced = slicing[0:2]
print sliced

# Len. Obtain the length of a string
print len(slicing)
print len(sliced)

# Compound data types. Ex. 1 Lists
squares = [1, 4, 9, 16, 25]
print squares[0] # Indexing returns the item
