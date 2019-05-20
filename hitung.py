import os
import sys

j=os.system
c=50*"#"
os.system("clear")
print (50*"#")
print ("                      Hitung                  ")
print (50*"#")

j("echo ' '")
j("echo -e '\e[33;1m silahkan mau pilih yang mana'")
j("echo ''")
j("echo ''")
j("echo -e '\e[37;1m 1. Penjumlahan'")
j("echo ''")
j("echo -e '\e[32;1m 2. pengurangan'")
j("echo ''")
j("echo -e '\e[34;1m 3. perkalian'")
j("echo ''")
j("echo -e '\e[30;1m 4. pembagian'")
j("echo ''")
j("echo -e '\e[32;1m 5. perpangkatan'")
j("echo ''")
j("echo -e '\e[38;1m 6. pencaplokan'")
j("echo ''")
j("echo -e '\e[37;1m 7. keluar'")
j("echo ''")
j("echo ''")

cok=input("Silahkan pilih==> ")
if cok == 1:
	j("php tambah.php")
	sys.exit()
if cok == 2:
	j("php kurang.php")
	sys.exit()
if cok == 3:
	j("php kali.php")
	sys.exit()
if cok == 4:
	j("python2 bagi.py")
	sys.exit()
if cok == 5:
	j("php pangkat.php")
	sys.exit()
if cok == 6:
	j("php caplok.php")
	sys.exit()
