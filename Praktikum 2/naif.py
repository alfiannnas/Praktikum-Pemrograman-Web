#Teorema 9.3 (kriteria euler)
from math import gcd
from sympy import isprime as prm

a = int(input("Masukkan nilai a : "))
p = int(input("Masukkan nilai p : "))

if prm (p) and p % 2 == 1:
    pow = 0.5 * (p - 1)
    result = a ** (pangkat) % p
    
    if result != 1:
        result =- 1
    print('%d / %d = %d (mod % d)' %(a, p, result, p))
    print('karena %d ^ %d = %d (mod %d), maka (%d/%d)= %d' %(a, pow, result, p, a, p, result))

else:
    print('%d bukan bilangan prima ganjil' %(p))