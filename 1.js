function Biodata(){
    const biodata  = '{"name": "Muhammad Rizky Ramadhan" ,"age" : 18 ,"address": "Desa Ajibarang Kulon RT03/05","hobbies": ["Bermain Basket","Nyanyi"],"is_married": false,"list_school": [{"name":"SMK Telkom Purwokerto","year_in":2017,"year_out":2020,"major":"Rekayasa Perangkat Lunak"},{"name":"SMP N 1 Ajibarang","year_in":2014,"year_out":2017}],"skills":[{"skill_name":"Javascript", "level":"beginner"},{"skill_name":"NodeJS","level":"beginner"}],"interest_in_coding":true}';
    var obj = JSON.parse(biodata)
    return obj;
}

console.log(Biodata());