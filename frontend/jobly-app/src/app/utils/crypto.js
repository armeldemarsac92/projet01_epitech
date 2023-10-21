import CryptoJS from 'crypto-js';

// The key should be stored securely, such as in an environment variable,
// and should be the same on both the client and server to allow decryption.
const ENCRYPTION_KEY = process.env.NEXT_PUBLIC_ENCRYPTION_KEY;

export function encryptData(data) {
    const ciphertext = CryptoJS.AES.encrypt(JSON.stringify(data), ENCRYPTION_KEY).toString();
    return ciphertext;
}

export function decryptData(ciphertext) {

    if (!ciphertext) {
        return null;
        console.log("no cypher text")
      }
    const bytes = CryptoJS.AES.decrypt(ciphertext, ENCRYPTION_KEY);
    const decryptedData = JSON.parse(bytes.toString(CryptoJS.enc.Utf8));
    return decryptedData;
}
