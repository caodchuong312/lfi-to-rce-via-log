# run 
```
git clone https://github.com/caodchuong312/lfi-to-rce-via-log.git
cd lfi-to-rce-via-log/
sudo docker-compose up
```
=> access: http://localhost:1337

# exploit

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/c8acdc9c-63d0-4090-9d43-a222f89e0d36)

## access.log/error.log

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/80a7c22f-55c3-43b1-b4fa-54a34d7b7d17)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/c318eaac-f68e-4e52-ae88-0fdf34cde638)

như vậy `../` bị replace, bypass: `....//`.

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/fd76151c-94b3-4fd3-9037-890f414c65e4)

test file `access.log`:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/6fd34435-af6c-4349-9dbd-8b644d49ec2d)

inject `<?php system('id'); ?>` vào `User-Agent`:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/49405279-c76d-4858-990a-d083a3f59c8c)

kết quả:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/6e23e81b-270a-410a-81e1-44acb7578b1b)

giờ tìm và đọc flag:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/b45d2f27-e185-4f79-8daf-c60da6110a62)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/4c97ce79-a6c9-41a4-bc8e-ac2869f88687)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/84769714-1cc5-414e-837c-f2c18f4d79ca)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/806149d2-46fa-4ccb-8a37-bb67e621fd39)

> tương tự với `error.log`
## sessions file

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/63d44508-5bc4-47de-bd32-29f02c68f119)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/6d16e862-87b1-4b72-b2fe-e17f8c79d194)

kiểm tra và truy cập file session:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/61c6fd80-7432-4d36-93bc-e686c74d7d46)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/154166dd-d12b-4819-826b-c36930106308)

### exploit

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/ec4e0c99-6a4f-45a2-99d1-e02b484831fe)

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/a6f9de7e-ef24-43ad-abcb-d246c071b5d1)

check file session:

![image](https://github.com/caodchuong312/lfi-to-rce-via-log/assets/92881216/035f4b00-2789-41c3-9558-930682ca22f2)

oke










