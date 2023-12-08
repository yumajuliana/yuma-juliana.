def cek_bilangan_prima(start, end):
    for angka in range(start, end + 1):
        if angka > 1:
            for i in range(2, angka):
                if (angka % i) == 0:
                    print(angka, "bukan bilangan prima")
                    break
            else:
                print(angka, "adalah bilangan prima")
        else:
            print(angka, "bukan bilangan prima")

# Contoh penggunaan
cek_bilangan_prima(1, 10)



