from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def home(request):
    return render(request,'alumniapp/home.html')
def aboutus(request):
    return render(request,'alumniapp/about.html')
def contact(request):
    return render(request,'alumniapp/contact.html')
def news(request):
    return render(request,'alumniapp/news.html')
def adminlogin(request):
    return render(request,'alumniapp/adminlogin.html')

def adminhome(request):
    return render(request,'alumniapp/adminhome.html')
def changepassword(request):
    return render(request,'alumniapp/changepassword.html')
def editviewalumni(request):
    return render(request,'alumniapp/editviewalumni.html')
def viewstaff(request):
    return render(request,'alumniapp/viewstaff.html')
def adminlogout(request):
    return render(request,'alumniapp/adminlogout.html')
