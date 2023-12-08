import random

def hitung_genap_ganjil():
    batas_bawah = 1
    batas_atas = 6
    counter = 1
    jumlah_genap = 0
    jumlah_ganjil = 0

    while counter <= 5:
        angka = random.randint(batas_bawah, batas_atas)

        if angka % 2 == 0:
            print(f"{angka} adalah bilangan genap.")
            jumlah_genap += 1
        else:
            print(f"{angka} adalah bilangan ganjil.")
            jumlah_ganjil += 1

        counter += 1

    print(f"\nJumlah bilangan genap: {jumlah_genap}")
    print(f"Jumlah bilangan ganjil: {jumlah_ganjil}")

# Contoh penggunaan
hitung_genap_ganjil()




