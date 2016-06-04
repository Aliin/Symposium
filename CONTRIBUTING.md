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

There are many more therefore I will show an example:
```
var i = 0;
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
  interating++;
}
```

#PHP
- Code MUST follow a "Coding Style Guide" PSR-1 and PSR-2: 
      http://www.php-fig.org/psr/psr-1/
      http://www.php-fig.org/psr/psr-2/
