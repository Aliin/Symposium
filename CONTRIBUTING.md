# Contribution Guidelines
These are the contribution guidelines that include how to contribute, what to contribute, and our coding standards.
# JavaScript and jQuery
1. Class names MUST be declared in `camelCase`.
2. `<script>` tags MUST NEVER be used except to reference an external JavaScript file. All JavaScript should be in a separate file, never inline.
3. Code MUST use 4 spaces for indenting, not tabs.
4. Lines *of code* SHOULD NOT be longer than 120 characters.
5. Opening braces MUST be one space after the function on the same line.
6. Closing braces MUST be on their own line after the body of the function.
7. The code MUST NOT contain whitespace at the end or on blank lines.
8. Operators such as `!` or `++` MUST NOT have a preceding space.
9. `,` or `;` MUST NOT have preceding space.
10. There MUST be a space preceding and proceeding an equals sign when declaring a variable.
11. Use double quotes when quotes are required.

There are many more therefore I will show an example:
```javascript
var zebra = "twenty";
if (condition) {
  doSomething();
}
else if (otherCondition) {
  somethingElse();
}
else {
  otherThing();
}
while (!condition) {
  iterating++;
  break;
}
for (i = 5; i < 100; i++) {
  iterating++;
}
```

#PHP
- Code MUST follow a "Coding Style Guide" [PSR-1](http://www.php-fig.org/psr/psr-1/) and [PSR-2](http://www.php-fig.org/psr/psr-2/). 
      
      
# Commenting Code
One of the most important aspects of writing code in a community is commenting it well. Basic commenting has a top priority if it is necessary so other developers understand what you're doing. In our case, since it is a beginner project - right now we are three people but I hope we'll find some more - I would like us to comment code in-depth so people understand what you're doing. That doesn't mean that you have to explain how syntax and code and languages work. We aren't making a tutorial. However, it means that

On the top of a file we should explain what the file is supposed to do
On the top of a function or class we should explain what the function / class does and what the function arguments mean and what arguments are required
important: the variable and function names should be self-explanatory
Any line or block whose meaning isn't easily discernible should be commented. You don't need to explain in detail how it works, just what it is supposed to do.
Again, you don't need to explain basic syntax or anything.
