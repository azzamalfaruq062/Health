$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

const { functions } = require("lodash")

function masuk(){
    let nama = document.getElementById("name").value
    let TB = document.getElementById("tb").value
    let BB = document.getElementById("bb").value

    document.getElementById("pusNama").innerHTML = nama
    document.getElementById("pusTB").innerHTML = TB
    document.getElementById("pusBB").innerHTML = BB
}

function BMI(){
    let TB = parseFloat(document.getElementById("pusTB").innerHTML)
    let BB = parseInt(document.getElementById("pusBB").innerHTML)

    let BMI = (BB/(TB*TB))

    document.getElementById("pusBMI").innerHTML = BMI.toFixed(2)

    if(BMI<18.5){
        document.getElementById("pusStatus").innerHTML = "Kurus"
    }else if(BMI<=22.9){
        document.getElementById("pusStatus").innerHTML = "Normal"
    }else if(BMI<=29.9){
        document.getElementById("pusStatus").innerHTML = "Gemuk"
    }else if(BMI>30){
        document.getElementById("pusStatus").innerHTML = "Obesitas"
    }else{
        document.getElementById("pusStatus").innerHTML = "Masukkan Tinggi & Berat Badan .."
    }
}
//Tidak dengan class tapy g digunakan
function umur(){
    // mengambil tgl dari input tgl lahir
    let lahir = document.getElementById('tglLahir').value
    let l = new Date(lahir) //Memasukkan tanggal kedalam Date agarbisa di ambil per thn dan bulan
    let l_tahun = l.getFullYear() //Mengambil Thn lahir
    let l_bulan = l.getMonth() 
    let l_tgl = l.getDate()

    // Mendapat waktu sekarang
    let date = new Date()//mengambil tgl sekarang
    let tahun = date.getFullYear()
    let bulan = date.getMonth()
    let tgl = date.getDate()

    if(bulan <= l_bulan){//cek bulan kurang dari bulan lahir
        if(tgl < l_tgl){
            let u = (tahun-1) - l_tahun
            document.getElementById('pusUmur').innerHTML = u;
        }else{
            let u = tahun - l_tahun
            document.getElementById('pusUmur').innerHTML = u;
        }
    }
    else if(bulan > l_bulan){
        let u = tahun - l_tahun
        document.getElementById('pusUmur').innerHTML = u;
    }
}
// Konsultasi gratis
function gratis(){
    let Status_BMI = document.getElementById('pusStatus').innerHTML
    let Umur = document.getElementById('pusUmur').innerHTML
    console.log(Status_BMI);
    console.log(Umur);
    if(Umur >= 17){
        let Status_Umur = 'Dewasa'
        if(Status_Umur == 'Dewasa' && Status_BMI == 'Obesitas'){
            document.getElementById('pusKon').innerHTML = 'Anda bisa mendapatkan Konsultasi gratis'
        }
    }
}


// Menggunakan Class inherict
function inherict(){
    //Class Umur
    class Umur {
        constructor(umur) {
          this.umur = umur; 
        }
        hitungUmur() {
          return 2022 - this.umur;
        }
    }

    //Class Konsultasi inherict dari umur
    class Konsultasi extends Umur{
        constructor(umur, bmi){
            super(umur)
            this.bmi = bmi
        }
        status(){
            if(this.hitungUmur()>=17){
                this.status = 'dewasa'
            }else{
                this.status = 'dibawa umur'
            }

            if(this.status=='dewasa' && this.bmi =='Obesitas'){
                return  document.getElementById('pusKon').innerHTML = 'Anda bisa mendapatkan Konsultasi gratis'
            }
            else{
                return  document.getElementById('pusKon').innerHTML = 'Maaf anda tidak memenuhi syarat'
            }

        }
    }
    let Status_BMI = document.getElementById('pusStatus').innerHTML
    let lahir = document.getElementById('tglLahir').value
    
    let l = new Date(lahir) 
    let l_tahun = l.getFullYear()
    let myKon = new Konsultasi(l_tahun, Status_BMI)
    console.log(myKon.status());

}


