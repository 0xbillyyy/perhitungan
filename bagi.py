print """
#################################
#	     Pembagian	        #
#################################
"""
jan=input("angka ==> ")
cok=input("dibagi dengan==> ")
if jan < cok :
	print "maaf gak bisa hehehe"
elif jan == cok :
	print "1"
elif jan == "0" :
	print "0"
elif jan > cok :
	print jan/cok
else :
	print ("Terima kasih")
	sys.exit()
