# permutations
all possible permutations of n-elements size of k without repeat

based on answer [Lazar Ljubenović](https://stackoverflow.com/users/2131286/lazar-ljubenovi%c4%87)
on [stackoverflow.com](https://stackoverflow.com/questions/46023946/calculate-the-total-amount-number-of-combinations-of-a-set-with-the-specified)

## Here his explanation of final combinations amount

Let's try it with three characters, A, B and C (n = 3) and combo length of k = 2, as your example states.

### With repetition
We start with two empty spaces.
The first empty space can be filled in 3 possible ways.
For each of three possible ways, the second space can be filled in another three possible ways.
This gives you a total of 3 × 3 possibilities.

In general, there are n ^ k possibilities.

### Without repetition
We start with two empty spaces.
The first empty space can be filled in 3 possible ways.
The second empty space can be filled in 2 possible ways, because you don't want to repeat yourself.
This gives you 3 × 2 possibilities in your case.

Let's go with another example. Say, you have five letters (ABCDE) and combo length of four _ _ _ _.

We put any of five letters on the first empty space. This is five possibilities: A, B, C, D, E.
Now for each possibility after the last step, no matter which letter we've chosen, now we have 4 letters left to choose from. If in the previous step we've chosen A, the corpus is now BCDE -- this is four possibilities. For B, we choose from ACDE -- this is again for possibilities. In total, since there were 5 ways to do previous step, and there are 4 ways to go after any of the previous choices, in total this is 20 possibilities: (AB, AC, AD, AE), (BA, BC, BD, BE), (CA, CB, CD, CE), (DA, DB, DC, DE), (EA, EB, EC, ED).
Let's keep going. After picking two letters, we're left with 3. With the same logic as before, for each of the previous 20 possibilities we have another 3 possibilities. This is 60 in total.
And one more space left. We have two letters which we haven't chosen before. From any of the previous 60 possibilities, we now have two possibilities. That's 120 in total.
So we've arrived at this by multiplying <b>5 × 4 × 3 × 2</b>. Why start from 5? Because we initially had 5 letters: ABCDE. Why have four numbers in our multiplication? Because there were 4 empty spaces: _ _ _ _.

In general, you keep multiplying a decremented value starting from n, and do this k times:
#### <b>n × (n - 1) × ... × (n - k + 1)</b>.

The last value is (n - k + 1) because you are multiplying k values in total. From n to (n - k + 1) there are k values in total (inclusive).

We can test this with our n = 5 and k = 4 example. We said that the formula was 5 × 4 × 3 × 2. Now look at the general formula: indeed, we start from n = 5 and keep multiplying until we reach the number 5 - 4 + 1 = 2.
