# ✅ Core PHP Project - Learning Checklist

## 🔹 Core PHP Basics
- [ ] PHP syntax and structure
- [ ] Variables and Data types
- [ ] Conditional statements (`if`, `switch`)
- [ ] Loops (`for`, `while`, `foreach`)
- [ ] Functions (built-in and user-defined)
- [ ] PHP Superglobals (`$_GET`, `$_POST`, `$_SESSION`, etc.)

## 🔹 Form Handling
- [ ] Form submission using `GET` and `POST`
- [ ] Input validation
- [ ] Input sanitization (`htmlspecialchars`, `filter_input`)

## 🔹 File Structure & Project Organization
- [ ] `index.php` as entry point
- [ ] Use of includes (header, footer, navbar)
- [ ] Separate logic (PHP) and views (HTML)

## 🔹 Sessions and Cookies
- [ ] `session_start()`, `$_SESSION`
- [ ] `setcookie()`, `$_COOKIE`
- [ ] Login/logout system with session

## 🔹 Database with MySQL
- [ ] Connect to MySQL using `mysqli` or `PDO`
- [ ] CRUD operations: `INSERT`, `SELECT`, `UPDATE`, `DELETE`
- [ ] Prepared statements for security

## 🔹 Security Essentials
- [ ] Prevent SQL Injection
- [ ] Prevent XSS (escaping output)
- [ ] Password hashing (`password_hash()`, `password_verify()`)

## 🔹 File Upload & Handling
- [ ] Upload files via form
- [ ] Validate file size, type, and errors
- [ ] Store and access uploaded files

## 🔹 Email Integration
- [ ] Send email using `mail()` function
- [ ] Use PHPMailer for better reliability (optional)

## 🔹 Optional Routing (Dynamic Pages)
- [ ] Load pages using `$_GET['page']`
- [ ] Basic `.htaccess` URL rewriting (optional)

## 🔹 AJAX with PHP
- [ ] Send data from JS to PHP via AJAX
- [ ] Return JSON response from PHP

## 🔹 JSON & APIs
- [ ] Parse JSON in PHP
- [ ] Use `cURL` to call external APIs (optional)

## 🔹 Deployment
- [ ] Test locally using XAMPP
- [ ] Upload to live server
- [ ] Handle file/folder permissions
- [ ] Configure `.htaccess` if needed

## 🔸 Extras (Optional but Useful)
- [ ] Error handling (`try-catch`, `error_reporting`)
- [ ] Use Composer (for packages like PHPMailer)
- [ ] Manual MVC pattern (optional, for better structure)



***
## PHP Comparison Operators  
| Operator | Name | Example | Description |  
|----------|------|---------|-------------|  
| `==` | Equal | `$x == $y` | Returns true if `$x` is equal to `$y` |  
| `===` | Identical | `$x === $y` | Returns true if `$x` is equal to `$y`, and they are of the same type |  
| `!=` | Not equal | `$x != $y` | Returns true if `$x` is not equal to `$y` |  
| `<>` | Not equal | `$x <> $y` | Returns true if `$x` is not equal to `$y` |  
| `!==` | Not identical | `$x !== $y` | Returns true if `$x` is not equal to `$y`, or they are not of the same type |  
| `>` | Greater than | `$x > $y` | Returns true if `$x` is greater than `$y` |  
| `<` | Less than | `$x < $y` | Returns true if `$x` is less than `$y` |  
| `>=` | Greater than or equal to | `$x >= $y` | Returns true if `$x` is greater than or equal to `$y` |  
| `<=` | Less than or equal to | `$x <= $y` | Returns true if `$x` is less than or equal to `$y` |  
| `<=>` | Spaceship | `$x <=> $y` | Returns an integer less than, equal to, or greater than zero, depending on if `$x` is less than, equal to, or greater than `$y`. Introduced in PHP 7. |  

---

## PHP Logical Operators  
| Operator | Name | Example | Description |  
|----------|------|---------|-------------|  
| `and` | And | `$x and $y` | True if both `$x` and `$y` are true |  
| `or` | Or | `$x or $y` | True if either `$x` or `$y` is true |  
| `xor` | Xor | `$x xor $y` | True if either `$x` or `$y` is true, but not both |  
| `&&` | And | `$x && $y` | True if both `$x` and `$y` are true |  
| `||` | Or | `$x || $y` | True if either `$x` or `$y` is true |  
| `!` | Not | `!$x` | True if `$x` is not true |  

---

## PHP String Operators  
| Operator | Name | Example | Description |  
|----------|------|---------|-------------|  
| `.` | Concatenation | `$txt1 . $txt2` | Concatenation of `$txt1` and `$txt2` |  
| `.= ` | Concatenation assignment | `$txt1 .= $txt2` | Appends `$txt2` to `$txt1` |  

---

## PHP Array Operators  
| Operator | Name | Example | Description |  
|----------|------|---------|-------------|  
| `+` | Union | `$x + $y` | Union of `$x` and `$y` |  
| `==` | Equality | `$x == $y` | Returns true if `$x` and `$y` have the same key/value pairs |  
| `===` | Identity | `$x === $y` | Returns true if `$x` and `$y` have the same key/value pairs in the same order and of the same types |  
| `!=` | Inequality | `$x != $y` | Returns true if `$x` is not equal to `$y` |  
| `<>` | Inequality | `$x <> $y` | Returns true if `$x` is not equal to `$y` |  
| `!==` | Non-identity | `$x !== $y` | Returns true if `$x` is not identical to `$y` |  

---

## PHP Ternary and Null Coalescing Operators  
| Operator | Name | Example | Description |  
|----------|------|---------|-------------|  
| `?:` | Ternary | `$x = expr1 ? expr2 : expr3` | Returns the value of `$x`. The value of `$x` is `expr2` if `expr1 = TRUE`. The value of `$x` is `expr3` if `expr1 = FALSE`. |  
| `??` | Null coalescing | `$x = expr1 ?? expr2` | Returns the value of `$x`. The value of `$x` is `expr1` if `expr1` exists and is not `NULL`. If `expr1` does not exist or is `NULL`, the value of `$x` is `expr2`. Introduced in PHP 7. |  


