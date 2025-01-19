import http from 'k6/http';
import { sleep } from 'k6';

export let options = {
    stages: [
        { duration: '30s', target: 50 }, // 50 pengguna dalam 30 detik
        { duration: '1m', target: 200 }, // Naik ke 200 pengguna dalam 1 menit
        { duration: '30s', target: 0 },  // Turun ke 0 pengguna dalam 30 detik
    ],
};

export default function () {
    let res = http.get('http://localhost:8080/karyawan'); // Ganti dengan URL aplikasi Anda
    sleep(1);
}
