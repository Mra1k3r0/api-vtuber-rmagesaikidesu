# Made by SaikiDesu (Mr.Aik3ro)
# YT: https://youtube.com/c/MrAik3ro
# FB: https://www.facebook.com/saikidesu.11
# Github: https://github.com/mraikero-01
# Random VTuber Image API using php, I hope this can help you!❤️


<?php
if (isset($_GET['character'])) {
  $character = $_GET['character'];
  if ($character !== 'gura' && $character !== 'pekora' && $character !== 'korone' && $character !== 'uto' && $character !== 'mumei' && $character !== 'koyori' && $character !== 'fubuki' && $character !== 'chloe' && $character !== 'ayame' && $character !== 'polka' && $character !== 'botan' && $character !== 'amelia' && $character !== 'okayu' && $character !== 'watame' && $character !== 'aloe' && $character !== 'marine'  && $character !== 'coco' && $character !== 'rushia') {
    $ketqua = array(
    "error" => "404",
    "msgone" => 'No data for this character!',
    "msgtwo" => 'Available: gura, pekora, korone, uto, mumei, koyori, fubuki, chloe, ayame, polka, botan, amelia, okayu, watame, aloe',
    );

    $cc = json_encode($ketqua , JSON_UNESCAPED_UNICODE);
    echo $cc;
  }
  else {

    if ($character=='gura') {
      $name = 'Gura';
      $alllink = array(
"https://i.postimg.cc/XY42pNN5/Gura-1.jpg",
"https://i.postimg.cc/MK85FZQL/Gura-10.jpg",
"https://i.postimg.cc/NfpRjCf6/Gura-100.jpg",
"https://i.postimg.cc/t4JWZdYL/Gura-101.jpg",
"https://i.postimg.cc/RVQd5r1Z/Gura-11.jpg",
"https://i.postimg.cc/7LCSLjz7/Gura-12.jpg",
"https://i.postimg.cc/vmjLLGy3/Gura-13.jpg",
"https://i.postimg.cc/KY4DMR61/Gura-14.jpg",
"https://i.postimg.cc/Kc7B4P19/Gura-15.jpg",
"https://i.postimg.cc/zvYC6pVh/Gura-16.jpg",
"https://i.postimg.cc/V6nMqMDk/Gura-17.jpg",
"https://i.postimg.cc/cHn7FP4Z/Gura-18.jpg",
"https://i.postimg.cc/Y2QfYcsz/Gura-19.jpg",
"https://i.postimg.cc/YSSbzXWq/Gura-2.jpg",
"https://i.postimg.cc/2yYW26KF/Gura-20.jpg",
"https://i.postimg.cc/bN80RCXc/Gura-21.jpg",
"https://i.postimg.cc/vZZWJ4H0/Gura-22.jpg",
"https://i.postimg.cc/X78f1f3Z/Gura-23.jpg",
"https://i.postimg.cc/XY1w4nr4/Gura-24.jpg",
"https://i.postimg.cc/fb6mS57P/Gura-25.jpg",
"https://i.postimg.cc/MHYQ4wkk/Gura-26.jpg",
"https://i.postimg.cc/CLFD8RDw/Gura-27.jpg",
"https://i.postimg.cc/TPWWxg8J/Gura-28.jpg",
"https://i.postimg.cc/jdZf4RQP/Gura-29.jpg",
"https://i.postimg.cc/V6xg1mHd/Gura-3.jpg",
"https://i.postimg.cc/13XqWbJT/Gura-30.jpg",
"https://i.postimg.cc/wjrsnFrB/Gura-31.jpg",
"https://i.postimg.cc/C1Tnx5ST/Gura-32.jpg",
"https://i.postimg.cc/mkVPjSMB/Gura-33.jpg",
"https://i.postimg.cc/LXtYYS8q/Gura-34.jpg",
"https://i.postimg.cc/SQGYmmP3/Gura-35.jpg",
"https://i.postimg.cc/fyM3YPV8/Gura-36.jpg",
"https://i.postimg.cc/8PPJ5qQ5/Gura-37.jpg",
"https://i.postimg.cc/X7HZyQ4g/Gura-38.jpg",
"https://i.postimg.cc/P5CCbYqn/Gura-39.jpg",
"https://i.postimg.cc/6pcMRsTm/Gura-4.jpg",
"https://i.postimg.cc/wjn7wMty/Gura-40.jpg",
"https://i.postimg.cc/wvQMxkwL/Gura-41.jpg",
"https://i.postimg.cc/XvFXmWF2/Gura-42.jpg",
"https://i.postimg.cc/mDshGnyT/Gura-44.jpg",
"https://i.postimg.cc/PJfxC87c/Gura-45.jpg",
"https://i.postimg.cc/HnSLXkDL/Gura-46.jpg",
"https://i.postimg.cc/tRDJL2ZH/Gura-49.jpg",
"https://i.postimg.cc/RhwRZyjG/Gura-5.jpg",
"https://i.postimg.cc/g2L0LpMY/Gura-50.jpg",
"https://i.postimg.cc/CL15Ykkn/Gura-51.jpg",
"https://i.postimg.cc/kXp45Gv1/Gura-52.jpg",
"https://i.postimg.cc/FzKrrXdX/Gura-53.jpg",
"https://i.postimg.cc/cJqLQzjf/Gura-54.jpg",
"https://i.postimg.cc/XJ4NPCnJ/Gura-55.jpg",
"https://i.postimg.cc/mrQ2VwfJ/Gura-56.jpg",
"https://i.postimg.cc/vBh8wZmv/Gura-57.jpg",
"https://i.postimg.cc/Wzf2tYgF/Gura-59.jpg",
"https://i.postimg.cc/HWM3z8V5/Gura-6.jpg",
"https://i.postimg.cc/5243fPpq/Gura-7.jpg",
"https://i.postimg.cc/bJDgKsg7/Gura-8.jpg",
"https://i.postimg.cc/Z5wLnrMk/Gura-9.jpg",
"https://i.postimg.cc/v8hwk0hs/Gura-47.jpg",
"https://i.postimg.cc/pTttb732/Gura-48.jpg",
"https://i.postimg.cc/x1cQKLKS/Gura-58.jpg",
"https://i.postimg.cc/NF4SCGv2/Gura-60.jpg",
"https://i.postimg.cc/28kPbWnQ/Gura-61.jpg",
"https://i.postimg.cc/dt5g809z/Gura-62.jpg",
"https://i.postimg.cc/QtcR5k6b/Gura-63.jpg",
"https://i.postimg.cc/x8YBPJhS/Gura-64.jpg",
"https://i.postimg.cc/sf9kgmGf/Gura-65.jpg",
"https://i.postimg.cc/nLyyCw1r/Gura-66.jpg",
"https://i.postimg.cc/vmxR8dfC/Gura-67.jpg",
"https://i.postimg.cc/cL62TN96/Gura-68.jpg",
"https://i.postimg.cc/761WbP6t/Gura-69.jpg",
"https://i.postimg.cc/SKM5Ffph/Gura-70.jpg",
"https://i.postimg.cc/zv02SdTn/Gura-71.jpg",
"https://i.postimg.cc/Y0pyFcLr/Gura-72.jpg",
"https://i.postimg.cc/Pxn7tvt8/Gura-73.jpg",
"https://i.postimg.cc/C5FF3ysw/Gura-43.jpg",
"https://i.postimg.cc/mrH2MyrW/Gura-74.jpg",
"https://i.postimg.cc/B6fZCP8L/Gura-75.jpg",
"https://i.postimg.cc/cC0fV6m8/Gura-76.jpg",
"https://i.postimg.cc/R0J1tkhq/Gura-77.jpg",
"https://i.postimg.cc/13trmnZG/Gura-78.jpg",
"https://i.postimg.cc/QtLQJfKm/Gura-79.jpg",
"https://i.postimg.cc/FFVy0grb/Gura-80.jpg",
"https://i.postimg.cc/8c4LDDKX/Gura-81.jpg",
"https://i.postimg.cc/Z5MFCbT1/Gura-82.jpg",
"https://i.postimg.cc/Pxmm31mj/Gura-83.jpg",
"https://i.postimg.cc/ZKYrHBnG/Gura-84.jpg",
"https://i.postimg.cc/VL7XVfbd/Gura-85.jpg",
"https://i.postimg.cc/7ZfSvFgX/Gura-86.jpg",
"https://i.postimg.cc/GmVGbXKR/Gura-87.jpg",
"https://i.postimg.cc/jjfN2y37/Gura-88.jpg",
"https://i.postimg.cc/G21Dy96S/Gura-89.jpg",
"https://i.postimg.cc/j5Q7Qtbq/Gura-90.jpg",
"https://i.postimg.cc/tJqVBwq3/Gura-91.jpg",
"https://i.postimg.cc/3Nt0V1NP/Gura-92.jpg",
"https://i.postimg.cc/BQvKDrws/Gura-93.jpg",
"https://i.postimg.cc/CM78Rh7m/Gura-94.jpg",
"https://i.postimg.cc/c458cFV3/Gura-95.jpg",
"https://i.postimg.cc/mgz1pQs5/Gura-96.jpg",
"https://i.postimg.cc/fRPXx3dk/Gura-97.jpg",
"https://i.postimg.cc/Xvy5xVKL/Gura-98.jpg",
"https://i.postimg.cc/9Md75Jnq/Gura-99.jpg"
      );
    };

    if ($character=='pekora') {
      $name = 'Pekora';
      $alllink = array(
"https://i.postimg.cc/vBVKfNR1/Pekora-1.jpg",
"https://i.postimg.cc/K8ppV2xk/Pekora-10.jpg",
"https://i.postimg.cc/L5Sxf4B7/Pekora-11.jpg",
"https://i.postimg.cc/rpvnVNdq/Pekora-12.jpg",
"https://i.postimg.cc/DZLC84sL/Pekora-13.jpg",
"https://i.postimg.cc/s2BHCNgn/Pekora-14.jpg",
"https://i.postimg.cc/prBqBNsd/Pekora-15.jpg",
"https://i.postimg.cc/wx5fzJ9d/Pekora-16.jpg",
"https://i.postimg.cc/52yn8RLx/Pekora-17.jpg",
"https://i.postimg.cc/Kjm5jqmh/Pekora-18.jpg",
"https://i.postimg.cc/R0ndDJgy/Pekora-19.jpg",
"https://i.postimg.cc/jSxBmcf9/Pekora-2.jpg",
"https://i.postimg.cc/mgnVjyy7/Pekora-20.jpg",
"https://i.postimg.cc/RVXg6B3s/Pekora-21.jpg",
"https://i.postimg.cc/rmXjXybm/Pekora-22.jpg",
"https://i.postimg.cc/V6qRYQQF/Pekora-23.jpg",
"https://i.postimg.cc/BQYCZByR/Pekora-24.jpg",
"https://i.postimg.cc/05CfFsCk/Pekora-25.jpg",
"https://i.postimg.cc/qqQx3s7h/Pekora-26.jpg",
"https://i.postimg.cc/6pFLn5B0/Pekora-27.jpg",
"https://i.postimg.cc/BvD5g96G/Pekora-28.jpg",
"https://i.postimg.cc/DZPq9rLj/Pekora-29.jpg",
"https://i.postimg.cc/SKj3NKDf/Pekora-3.jpg",
"https://i.postimg.cc/63Xrbj24/Pekora-30.jpg",
"https://i.postimg.cc/8ckhN7b1/Pekora-31.jpg",
"https://i.postimg.cc/NGb6bxgL/Pekora-32.jpg",
"https://i.postimg.cc/Wb3MyJ38/Pekora-33.jpg",
"https://i.postimg.cc/wTGhYTRp/Pekora-34.jpg",
"https://i.postimg.cc/J004RPqf/Pekora-35.jpg",
"https://i.postimg.cc/KzZ8HZgv/Pekora-36.jpg",
"https://i.postimg.cc/ryfJYpXC/Pekora-37.jpg",
"https://i.postimg.cc/jdkMCSMd/Pekora-38.jpg",
"https://i.postimg.cc/SRbvrfqg/Pekora-4.jpg",
"https://i.postimg.cc/0573NFdF/Pekora-5.jpg",
"https://i.postimg.cc/pd779tSb/Pekora-6.jpg",
"https://i.postimg.cc/Cxc9g8HK/Pekora-7.jpg",
"https://i.postimg.cc/X73PBLsJ/Pekora-8.jpg",
"https://i.postimg.cc/jdXFHf1h/Pekora-9.jpg"
      );
    };
    if ($character=='korone') {
      $name = 'Korone';
      $alllink = array(
"https://i.postimg.cc/3N3s7Xqy/Korone-1.jpg",
"https://i.postimg.cc/0NwRC2mN/Korone-10.jpg",
"https://i.postimg.cc/dtHbPTj1/Korone-11.jpg",
"https://i.postimg.cc/gJVCfSgF/Korone-12.jpg",
"https://i.postimg.cc/bw44dcMf/Korone-13.jpg",
"https://i.postimg.cc/MTmLscGz/Korone-14.jpg",
"https://i.postimg.cc/xC27yGns/Korone-15.jpg",
"https://i.postimg.cc/jjNm730w/Korone-16.jpg",
"https://i.postimg.cc/L5ybprf7/Korone-17.jpg",
"https://i.postimg.cc/kGMpLnVK/Korone-18.jpg",
"https://i.postimg.cc/rpBc6tcW/Korone-2.jpg",
"https://i.postimg.cc/PfKcY8c4/Korone-20.jpg",
"https://i.postimg.cc/Vk5cdFkn/Korone-3.jpg",
"https://i.postimg.cc/PJKBqLGS/Korone-4.jpg",
"https://i.postimg.cc/KjNygqTr/Korone-5.jpg",
"https://i.postimg.cc/yYLH1Gs7/Korone-6.jpg",
"https://i.postimg.cc/G2n0gwJx/Korone-7.jpg",
"https://i.postimg.cc/65WKNKsH/Korone-8.jpg",
"https://i.postimg.cc/FssMBxc8/Korone-9.jpg",
"https://i.postimg.cc/d05GzPhC/Korone-21.jpg",
"https://i.postimg.cc/yN1FQY8B/Korone-22.jpg",
"https://i.postimg.cc/kgdNSyr2/Korone-23.jpg",
"https://i.postimg.cc/T3qVJWGC/Korone-24.jpg",
"https://i.postimg.cc/7YzMbWRv/Korone-25.jpg",
"https://i.postimg.cc/pdsJSS5z/Korone-26.jpg",
"https://i.postimg.cc/prFQpXGJ/Korone-27.jpg",
"https://i.postimg.cc/s2jJwzx3/Korone-28.jpg",
"https://i.postimg.cc/pLxQLvDK/Korone-29.jpg",
"https://i.postimg.cc/fLFjz0Kb/Korone-30.jpg",
"https://i.postimg.cc/gcXHMNzL/Korone-31.jpg",
"https://i.postimg.cc/4NpbGyhJ/Korone-32.jpg",
"https://i.postimg.cc/PJKBqLGS/Korone-4.jpg"
      );
    };

    if ($character=='uto') {
      $name = 'Uto';
      $alllink = array(
"https://i.postimg.cc/SKpVwy3R/Uto-1.jpg",
"https://i.postimg.cc/zXbjvb13/Uto-10.jpg",
"https://i.postimg.cc/qv2xcPqT/Uto-11.jpg",
"https://i.postimg.cc/Kv65MGZf/Uto-12.jpg",
"https://i.postimg.cc/C1MTF2Qy/Uto-13.jpg",
"https://i.postimg.cc/KvMVyF8k/Uto-14.jpg",
"https://i.postimg.cc/rF7kSQKW/Uto-15.jpg",
"https://i.postimg.cc/wjs9PnS0/Uto-16.jpg",
"https://i.postimg.cc/WztBZkVX/Uto-17.jpg",
"https://i.postimg.cc/D0st5KWX/Uto-18.jpg",
"https://i.postimg.cc/zDcZr0wM/Uto-19.jpg",
"https://i.postimg.cc/JhmcppHB/Uto-2.jpg",
"https://i.postimg.cc/jqkcR6mG/Uto-3.jpg",
"https://i.postimg.cc/g2hNSwM1/Uto-4.jpg",
"https://i.postimg.cc/76KVGS6J/Uto-5.jpg",
"https://i.postimg.cc/7hcnXDSx/Uto-6.jpg",
"https://i.postimg.cc/6QLzKkx0/Uto-7.jpg",
"https://i.postimg.cc/gJzs2gYP/Uto-8.jpg",
"https://i.postimg.cc/RhqTcq6s/Uto-9.jpg"
      );
    };

    if ($character=='mumei') {
      $name = 'Mumei';
      $alllink = array(
"https://i.postimg.cc/6qV3qZJ2/Mumei-1.jpg",
"https://i.postimg.cc/SKXx83bp/Mumei-10.jpg",
"https://i.postimg.cc/TPZYc0T5/Mumei-11.jpg",
"https://i.postimg.cc/4dV42c3L/Mumei-12.jpg",
"https://i.postimg.cc/52y4dT0F/Mumei-13.jpg",
"https://i.postimg.cc/wMzqCBy6/Mumei-14.jpg",
"https://i.postimg.cc/wMkqgdLD/Mumei-15.jpg",
"https://i.postimg.cc/44vNzpqn/Mumei-16.jpg",
"https://i.postimg.cc/tCXRDYGk/Mumei-17.jpg",
"https://i.postimg.cc/vH3YKbQs/Mumei-18.jpg",
"https://i.postimg.cc/GmfccK8g/Mumei-19.jpg",
"https://i.postimg.cc/zvYvqjMY/Mumei-2.jpg",
"https://i.postimg.cc/cHy03JcQ/Mumei-20.jpg",
"https://i.postimg.cc/Y0t7XyZ0/Mumei-21.jpg",
"https://i.postimg.cc/QCS3vJZb/Mumei-22.jpg",
"https://i.postimg.cc/T2cfyf5D/Mumei-23.jpg",
"https://i.postimg.cc/FRymVQPw/Mumei-24.jpg",
"https://i.postimg.cc/Qxxs1wcn/Mumei-25.jpg",
"https://i.postimg.cc/9Qsh3fKv/Mumei-26.jpg",
"https://i.postimg.cc/yYQKPjP6/Mumei-27.jpg",
"https://i.postimg.cc/JzsLdX6N/Mumei-28.jpg",
"https://i.postimg.cc/0Qs1QB8n/Mumei-29.jpg",
"https://i.postimg.cc/9M7z3SLB/Mumei-3.jpg",
"https://i.postimg.cc/jjNrRbrC/Mumei-30.jpg",
"https://i.postimg.cc/wjjvx3WM/Mumei-4.jpg",
"https://i.postimg.cc/HkvLrHK2/Mumei-5.jpg",
"https://i.postimg.cc/SQcjDB2S/Mumei-6.jpg",
"https://i.postimg.cc/L6T5Mj3G/Mumei-7.jpg",
"https://i.postimg.cc/GhrtNXGk/Mumei-8.jpg",
"https://i.postimg.cc/9fqcz9ym/Mumei-9.jpg"
      );
    };

    if ($character=='koyori') {
      $name = 'Koyori';
      $alllink = array(
"https://i.postimg.cc/PqKQpLH7/Koyori-1.jpg",
"https://i.postimg.cc/wBWbK413/Koyori-10.jpg",
"https://i.postimg.cc/2yWHZz2B/Koyori-11.jpg",
"https://i.postimg.cc/gk9tPZ2y/Koyori-12.jpg",
"https://i.postimg.cc/hGK0tLkx/Koyori-2.jpg",
"https://i.postimg.cc/CLf7PLCZ/Koyori-3.jpg",
"https://i.postimg.cc/hvNrDHnP/Koyori-4.jpg",
"https://i.postimg.cc/RCYGLnt5/Koyori-5.jpg",
"https://i.postimg.cc/7hJ3Wmzv/Koyori-6.jpg",
"https://i.postimg.cc/kg3ck3wT/Koyori-7.jpg",
"https://i.postimg.cc/2SQwYcKr/Koyori-8.jpg",
"https://i.postimg.cc/fRNPY94W/Koyori-9.jpg"
      );
    };

    if ($character=='fubuki') {
      $name = 'Fubuki';
      $alllink = array(
"https://i.postimg.cc/LsHQqKcx/Fubuki-1.jpg",
"https://i.postimg.cc/vBK0S1cK/Fubuki-10.jpg",
"https://i.postimg.cc/sxZTFVWg/Fubuki-11.jpg",
"https://i.postimg.cc/pVhvVzYp/Fubuki-12.jpg",
"https://i.postimg.cc/y6MHDxvn/Fubuki-13.jpg",
"https://i.postimg.cc/MK18VwLw/Fubuki-14.jpg",
"https://i.postimg.cc/dDP4wzRm/Fubuki-15.jpg",
"https://i.postimg.cc/HxnS20s5/Fubuki-16.jpg",
"https://i.postimg.cc/P54sV4hF/Fubuki-17.jpg",
"https://i.postimg.cc/Jhzwfkz7/Fubuki-18.jpg",
"https://i.postimg.cc/3x7QZ6Mv/Fubuki-19.jpg",
"https://i.postimg.cc/bw0FNNBG/Fubuki-2.jpg",
"https://i.postimg.cc/0NXgPyzY/Fubuki-20.jpg",
"https://i.postimg.cc/W3dB3cZQ/Fubuki-21.jpg",
"https://i.postimg.cc/mDK01pNh/Fubuki-22.jpg",
"https://i.postimg.cc/PJZ0Wb2y/Fubuki-23.jpg",
"https://i.postimg.cc/y6ZqCBsR/Fubuki-24.jpg",
"https://i.postimg.cc/Hswfj2Js/Fubuki-25.jpg",
"https://i.postimg.cc/XYnt5CFK/Fubuki-26.jpg",
"https://i.postimg.cc/Xvp9HSt5/Fubuki-27.jpg",
"https://i.postimg.cc/QC0tqPFh/Fubuki-28.jpg",
"https://i.postimg.cc/25s2z98k/Fubuki-29.jpg",
"https://i.postimg.cc/DwDSDtBz/Fubuki-30.jpg",
"https://i.postimg.cc/HLy9P00f/Fubuki-31.jpg",
"https://i.postimg.cc/d0YYL60B/Fubuki-32.jpg",
"https://i.postimg.cc/qvtR814H/Fubuki-33.jpg",
"https://i.postimg.cc/ZRNsptDv/Fubuki-34.jpg",
"https://i.postimg.cc/cL1zjz6P/Fubuki-35.jpg",
"https://i.postimg.cc/QCsm7BTv/Fubuki-36.jpg",
"https://i.postimg.cc/mZqnmn9r/Fubuki-3.jpg",
"https://i.postimg.cc/2yqKzQsm/Fubuki-4.jpg",
"https://i.postimg.cc/GtZS9BRD/Fubuki-5.jpg",
"https://i.postimg.cc/tTvcQSm2/Fubuki-6.jpg",
"https://i.postimg.cc/rw2PktQX/Fubuki-7.jpg",
"https://i.postimg.cc/c4nb2c7B/Fubuki-8.jpg",
"https://i.postimg.cc/d04HrNvw/Fubuki-9.jpg"
      );
    };

    if ($character=='chloe') {
      $name = 'Chloe';
      $alllink = array(
"https://i.postimg.cc/dVzQYg93/Chloe-1.jpg",
"https://i.postimg.cc/W3m1SSg3/Chloe-2.jpg",
"https://i.postimg.cc/QC0xZt6Z/Chloe-3.jpg",
"https://i.postimg.cc/cCs4zYBc/Chloe-4.jpg",
"https://i.postimg.cc/VsRNCGzZ/Chloe-5.jpg",
"https://i.postimg.cc/RVZZQ7FS/Chloe-6.jpg",
"https://i.postimg.cc/qvtBWpyW/Chloe-7.jpg",
"https://i.postimg.cc/sDHDnMQp/Chloe-8.jpg",
"https://i.postimg.cc/s27jDKnc/Chloe-9.jpg",
"https://i.postimg.cc/dQmHnnj9/Chloe-10.jpg",
"https://i.postimg.cc/52kkL0Sd/Chloe-11.jpg",
"https://i.postimg.cc/3NBtRJxq/Chloe-12.jpg",
"https://i.postimg.cc/q7hDLT1t/Chloe-13.jpg",
"https://i.postimg.cc/g0CStT7g/Chloe-14.jpg",
"https://i.postimg.cc/cCZD080Y/Chloe-15.jpg",
"https://i.postimg.cc/52tRXvvS/Chloe-16.jpg",
"https://i.postimg.cc/cHfDpcy0/Chloe-17.jpg",
"https://i.postimg.cc/tCqrcPrG/Chloe-18.jpg",
"https://i.postimg.cc/pLysWvb0/Chloe-19.jpg",
"https://i.postimg.cc/VLK7P6Tr/Chloe-20.jpg",
"https://i.postimg.cc/VNC4tFNn/Chloe-21.jpg",
"https://i.postimg.cc/VkTD5hzz/Chloe-22.jpg"
      );
    };

    if ($character=='ayame') {
      $name = 'Ayame';
      $alllink = array(
"https://i.postimg.cc/gk6LZ92y/Ayame-1.jpg",
"https://i.postimg.cc/fk4LKLRc/Ayame-10.jpg",
"https://i.postimg.cc/v84t3NmT/Ayame-11.jpg",
"https://i.postimg.cc/Y2TfVz43/Ayame-12.jpg",
"https://i.postimg.cc/c4YMNtwN/Ayame-13.jpg",
"https://i.postimg.cc/T36j22J5/Ayame-14.jpg",
"https://i.postimg.cc/ZRZdczcJ/Ayame-15.jpg",
"https://i.postimg.cc/Dz1GLw1C/Ayame-16.jpg",
"https://i.postimg.cc/cJGgxGPf/Ayame-17.jpg",
"https://i.postimg.cc/RhpJ46z0/Ayame-18.jpg",
"https://i.postimg.cc/L58gckw7/Ayame-19.jpg",
"https://i.postimg.cc/rwBWDrR0/Ayame-20.jpg",
"https://i.postimg.cc/BnLHZgbf/Ayame-21.jpg",
"https://i.postimg.cc/C1NfrrPk/Ayame-22.jpg",
"https://i.postimg.cc/m2hFVwQ1/Ayame-23.jpg",
"https://i.postimg.cc/X7hBPC8H/Ayame-24.jpg",
"https://i.postimg.cc/QdTKZdYX/Ayame-25.jpg",
"https://i.postimg.cc/5t5HjkMT/Ayame-26.jpg",
"https://i.postimg.cc/T2tDrSWX/Ayame-27.jpg",
"https://i.postimg.cc/LXHJPB9X/Ayame-28.jpg",
"https://i.postimg.cc/Y9bhzG0x/Ayame-29.jpg",
"https://i.postimg.cc/brrdCy2f/Ayame-30.jpg",
"https://i.postimg.cc/zfNvmSRj/Ayame-31.jpg",
"https://i.postimg.cc/zXLVTfrn/Ayame-32.jpg",
"https://i.postimg.cc/MGYTzM78/Ayame-33.jpg",
"https://i.postimg.cc/pXgyCtW3/Ayame-34.jpg",
"https://i.postimg.cc/ZRKqnbHv/Ayame-35.jpg",
"https://i.postimg.cc/wjLMbb3M/Ayame-37.jpg",
"https://i.postimg.cc/Qt4dW2Y4/Ayame-38.jpg",
"https://i.postimg.cc/cCv47FVs/Ayame-39.jpg",
"https://i.postimg.cc/XqtNswb9/Ayame-40.jpg",
"https://i.postimg.cc/xTb1cFv5/Ayame-41.jpg",
"https://i.postimg.cc/TPTKFpqQ/Ayame-2.jpg",
"https://i.postimg.cc/VshbvsmL/Ayame-3.jpg",
"https://i.postimg.cc/HkwJ6Q5V/Ayame-4.jpg",
"https://i.postimg.cc/RZ561PWk/Ayame-5.jpg",
"https://i.postimg.cc/Dz5STnxh/Ayame-6.jpg",
"https://i.postimg.cc/hj5hXMF3/Ayame-7.jpg",
"https://i.postimg.cc/855jk9Y6/Ayame-8.jpg",
"https://i.postimg.cc/yx3xc9s6/Ayame-9.jpg"
      );
    };

    if ($character=='polka') {
      $name = 'Polka';
      $alllink = array(
"https://i.postimg.cc/cCtr8Y1s/Polka-1.jpg",
"https://i.postimg.cc/6TsTV3TC/Polka-2.jpg",
"https://i.postimg.cc/zGFSBmPx/Polka-3.jpg",
"https://i.postimg.cc/9FTY6wP5/Polka-4.jpg",
"https://i.postimg.cc/Pf0MVQwQ/Polka-5.jpg",
"https://i.postimg.cc/N0G82N3B/Polka-6.jpg",
"https://i.postimg.cc/9QhYCX14/Polka-7.jpg",
"https://i.postimg.cc/44Y51Sm3/Polka-8.jpg"
      );
    };

    if ($character=='botan') {
       $name = 'Botan';
       $alllink = array(
"https://i.postimg.cc/HL2ZFdb1/Botan-1.jpg",
"https://i.postimg.cc/jjbjcwVc/Botan-10.jpg",
"https://i.postimg.cc/y8SzqgN4/Botan-11.jpg",
"https://i.postimg.cc/tgXD3wwS/Botan-12.jpg",
"https://i.postimg.cc/FRrqK7hK/Botan-13.jpg",
"https://i.postimg.cc/PfmpHJPD/Botan-2.jpg",
"https://i.postimg.cc/FKmCP7dx/Botan-3.jpg",
"https://i.postimg.cc/CKXBhfGG/Botan-4.jpg",
"https://i.postimg.cc/NFydyXSQ/Botan-5.jpg",
"https://i.postimg.cc/J0JbV5SH/Botan-6.jpg",
"https://i.postimg.cc/Xq0rFSDX/Botan-7.jpg",
"https://i.postimg.cc/SNdnXPLN/Botan-8.jpg",
"https://i.postimg.cc/vZSDh6SJ/Botan-9.jpg"
       );
      };

    if ($character=='amelia') {
       $name = 'Amelia';
       $alllink = array(
"https://i.postimg.cc/NGDyLMwr/Amelia-1.jpg",
"https://i.postimg.cc/7L4Dg33P/Amelia-10.jpg",
"https://i.postimg.cc/90hNkbfz/Amelia-11.jpg",
"https://i.postimg.cc/cHrsHs7f/Amelia-12.jpg",
"https://i.postimg.cc/4NzXn2c2/Amelia-13.jpg",
"https://i.postimg.cc/2ScM5n0X/Amelia-14.jpg",
"https://i.postimg.cc/g0x5Lr5c/Amelia-15.jpg",
"https://i.postimg.cc/W4xyGTLG/Amelia-16.jpg",
"https://i.postimg.cc/tJNmG61k/Amelia-17.jpg",
"https://i.postimg.cc/v8rKVJPn/Amelia-18.jpg",
"https://i.postimg.cc/tJkDMHfm/Amelia-19.jpg",
"https://i.postimg.cc/m2dFprXG/Amelia-2.jpg",
"https://i.postimg.cc/J4hQzvSM/Amelia-20.jpg",
"https://i.postimg.cc/3NfmGrz7/Amelia-21.jpg",
"https://i.postimg.cc/G3XkVztN/Amelia-22.jpg",
"https://i.postimg.cc/vm7YjqY6/Amelia-3.jpg",
"https://i.postimg.cc/4dTKHHdp/Amelia-4.jpg",
"https://i.postimg.cc/T1zBTxQ2/Amelia-5.jpg",
"https://i.postimg.cc/V6BJqsrp/Amelia-6.jpg",
"https://i.postimg.cc/WzYb8d2W/Amelia-7.jpg",
"https://i.postimg.cc/MKXGTmDh/Amelia-8.jpg",
"https://i.postimg.cc/4NtxVND5/Amelia-9.jpg"
       );
      };

      if ($character=='okayu') {
       $name = 'Okayu';
       $alllink = array(
"https://i.postimg.cc/JhsGGVLV/Okayu-1.jpg",
"https://i.postimg.cc/W3DgLq3Z/Okayu-10.jpg",
"https://i.postimg.cc/Qt5CJQCf/Okayu-11.jpg",
"https://i.postimg.cc/TYydVjsg/Okayu-12.jpg",
"https://i.postimg.cc/L8XsbKhY/Okayu-13.jpg",
"https://i.postimg.cc/W3Rbzd8g/Okayu-14.jpg",
"https://i.postimg.cc/XqLVsQbk/Okayu-15.jpg",
"https://i.postimg.cc/RZnkFXDp/Okayu-16.jpg",
"https://i.postimg.cc/xd24dYHq/Okayu-17.jpg",
"https://i.postimg.cc/xTX7x6nj/Okayu-18.jpg",
"https://i.postimg.cc/fW2pfG4g/Okayu-19.jpg",
"https://i.postimg.cc/7ZMNmzGY/Okayu-2.jpg",
"https://i.postimg.cc/1XkKYcr4/Okayu-20.jpg",
"https://i.postimg.cc/9QJLcTWg/Okayu-21.jpg",
"https://i.postimg.cc/gcC57vJv/Okayu-22.jpg",
"https://i.postimg.cc/RhKPmDFw/Okayu-23.jpg",
"https://i.postimg.cc/QdL66sfS/Okayu-24.jpg",
"https://i.postimg.cc/RVMM85q1/Okayu-25.jpg",
"https://i.postimg.cc/1z3YFBCZ/Okayu-26.jpg",
"https://i.postimg.cc/7h3NdJsV/Okayu-27.jpg",
"https://i.postimg.cc/xT9GqCpw/Okayu-28.jpg",
"https://i.postimg.cc/j5N6nJbb/Okayu-29.jpg",
"https://i.postimg.cc/05FMR4Gz/Okayu-3.jpg",
"https://i.postimg.cc/bNYbp5s8/Okayu-30.jpg",
"https://i.postimg.cc/Qtk9rgDH/Okayu-31.jpg",
"https://i.postimg.cc/pTNzvXn1/Okayu-32.jpg",
"https://i.postimg.cc/K86Rkpv1/Okayu-33.jpg",
"https://i.postimg.cc/MKjYh44T/Okayu-34.jpg",
"https://i.postimg.cc/Dz1mqQ8B/Okayu-35.jpg",
"https://i.postimg.cc/3rq4Qw5j/Okayu-36.jpg",
"https://i.postimg.cc/mDJbJtzt/Okayu-37.jpg",
"https://i.postimg.cc/BvhZ5hJ5/Okayu-38.jpg",
"https://i.postimg.cc/tR3fLsVw/Okayu-39.jpg",
"https://i.postimg.cc/JtCzy9KK/Okayu-4.jpg",
"https://i.postimg.cc/vTbPQv6j/Okayu-40.jpg",
"https://i.postimg.cc/XqbPrbts/Okayu-41.jpg",
"https://i.postimg.cc/MKtLpg5Y/Okayu-42.jpg",
"https://i.postimg.cc/kgLP7kMp/Okayu-43.jpg",
"https://i.postimg.cc/L8MTtDsb/Okayu-5.jpg",
"https://i.postimg.cc/cJFBNNBp/Okayu-6.jpg",
"https://i.postimg.cc/mrpC5ybR/Okayu-7.jpg",
"https://i.postimg.cc/ZnGC89Y8/Okayu-8.jpg",
"https://i.postimg.cc/ydzg5QwM/Okayu-9.jpg"
       );
      };

      if ($character=='watame') {
       $name = 'Watame';
       $alllink = array(
"https://i.postimg.cc/YSRrtt0z/Watame-1.jpg",
"https://i.postimg.cc/59CtCdRb/Watame-10.jpg",
"https://i.postimg.cc/HxSk9TCk/Watame-11.jpg",
"https://i.postimg.cc/QVZGpzVM/Watame-12.jpg",
"https://i.postimg.cc/qR7kRWCV/Watame-13.jpg",
"https://i.postimg.cc/nVgHFRFg/Watame-14.jpg",
"https://i.postimg.cc/bJKNB3d7/Watame-15.jpg",
"https://i.postimg.cc/MG6wPg5M/Watame-16.jpg",
"https://i.postimg.cc/xC7Sd82M/Watame-17.jpg",
"https://i.postimg.cc/XJXb3FTn/Watame-18.jpg",
"https://i.postimg.cc/rF5zvX1Q/Watame-19.jpg",
"https://i.postimg.cc/5yCWQJ4G/Watame-2.jpg",
"https://i.postimg.cc/SRFDVYby/Watame-20.jpg",
"https://i.postimg.cc/cCRTz1df/Watame-21.jpg",
"https://i.postimg.cc/WzgbLgkh/Watame-22.jpg",
"https://i.postimg.cc/nc3G9DWy/Watame-3.jpg",
"https://i.postimg.cc/HxPT73QJ/Watame-4.jpg",
"https://i.postimg.cc/65bCpN2w/Watame-5.jpg",
"https://i.postimg.cc/VsGJjWYW/Watame-6.jpg",
"https://i.postimg.cc/90pK7f3L/Watame-7.jpg",
"https://i.postimg.cc/VLkjwNND/Watame-8.jpg",
"https://i.postimg.cc/BbTsw3rF/Watame-9.jpg"
       );
      };

      if ($character=='aloe') {
       $name = 'Aloe';
       $alllink = array(
      "https://i.postimg.cc/SxfP1rgJ/Aloe-1.jpg",
"https://i.postimg.cc/zfP04PKX/Aloe-10.jpg",
"https://i.postimg.cc/dVs63K9V/Aloe-11.jpg",
"https://i.postimg.cc/tR62mkTp/Aloe-12.jpg",
"https://i.postimg.cc/6qCc2WSy/Aloe-13.jpg",
"https://i.postimg.cc/tCH206ZP/Aloe-14.jpg",
"https://i.postimg.cc/hv884Czm/Aloe-15.jpg",
"https://i.postimg.cc/brfHhXJ8/Aloe-16.jpg",
"https://i.postimg.cc/Y2QzxSnS/Aloe-17.jpg",
"https://i.postimg.cc/sDy9HRq4/Aloe-18.jpg",
"https://i.postimg.cc/jdX6GFr0/Aloe-19.jpg",
"https://i.postimg.cc/HLL6ZCJh/Aloe-2.jpg",
"https://i.postimg.cc/yNJF363s/Aloe-20.jpg",
"https://i.postimg.cc/kgYQ5R4T/Aloe-21.jpg",
"https://i.postimg.cc/5tZ8Bc8v/Aloe-22.jpg",
"https://i.postimg.cc/ZKTpFxvf/Aloe-23.jpg",
"https://i.postimg.cc/wvLLFWkr/Aloe-24.jpg",
"https://i.postimg.cc/PJHZ7m35/Aloe-25.jpg",
"https://i.postimg.cc/6qhRxygL/Aloe-26.jpg",
"https://i.postimg.cc/N0rHfNZ0/Aloe-27.jpg",
"https://i.postimg.cc/768TC3yn/Aloe-28.jpg",
"https://i.postimg.cc/VkhtwyGT/Aloe-29.jpg",
"https://i.postimg.cc/Jh72fkFK/Aloe-3.jpg",
"https://i.postimg.cc/DZr41Svk/Aloe-30.jpg",
"https://i.postimg.cc/xTTNbjBh/Aloe-31.jpg",
"https://i.postimg.cc/v8v6Bx25/Aloe-32.jpg",
"https://i.postimg.cc/1zWjszhS/Aloe-4.jpg",
"https://i.postimg.cc/qRzZRd43/Aloe-5.jpg",
"https://i.postimg.cc/wjj5HQ6t/Aloe-6.jpg",
"https://i.postimg.cc/zXmPJMMy/Aloe-7.jpg",
"https://i.postimg.cc/vBg3yLt7/Aloe-8.jpg",
"https://i.postimg.cc/d1bnVk5b/Aloe-9.jpg"
       );
      };
     if ($character=='marine') {
      $name = 'Marine';
      $alllink = array(
      "https://i.postimg.cc/4yQ813X6/marine1.jpg",
"https://i.postimg.cc/CK5WLbSW/marine10.jpg",
"https://i.postimg.cc/vZ3Js0Fr/marine11.jpg",
"https://i.postimg.cc/J0VgqgZL/marine12.jpg",
"https://i.postimg.cc/26fFXfc2/marine13.jpg",
"https://i.postimg.cc/NMrSRYyD/marine14.jpg",
"https://i.postimg.cc/hGYNJhGh/marine15.jpg",
"https://i.postimg.cc/HWXFxY1s/marine16.jpg",
"https://i.postimg.cc/yxHQ9RC6/marine17.jpg",
"https://i.postimg.cc/D0rNYgPb/marine18.jpg",
",https://i.postimg.cc/g2k7N3Xn/marine19.jpg",
"https://i.postimg.cc/kXyZQT50/marine2.jpg",
"https://i.postimg.cc/QxDwK2jg/marine20.jpg",
"https://i.postimg.cc/7ZdN0zgv/marine21.png",
"https://i.postimg.cc/hP4MBcSY/marine22.jpg",
"https://i.postimg.cc/P53RcNYK/marine23.jpg",
"https://i.postimg.cc/SK9frKrn/marine24.jpg",
"https://i.postimg.cc/3RCjsbz7/marine25.jpg",
"https://i.postimg.cc/j2cX7khv/marine26.jpg",
"https://i.postimg.cc/MH60qm8B/marine27.jpg",
"https://i.postimg.cc/bNv05ggc/marine28.png",
"https://i.postimg.cc/T20qQFrJ/marine29.jpg",
"https://i.postimg.cc/DfxL1sTC/marine3.jpg",
"https://i.postimg.cc/SRx9wQW7/marine30.png",
"https://i.postimg.cc/Vkxjd88m/marine31.png",
"https://i.postimg.cc/26mh77yt/marine4.jpg",
"https://i.postimg.cc/TPnnb4dm/marine5.png",
"https://i.postimg.cc/BnLTSvRm/marine6.jpg",
"https://i.postimg.cc/FzCSmtpt/marine7.png",
"https://i.postimg.cc/k4c81Rtg/marine8.jpg",
"https://i.postimg.cc/4NntPd4X/marine9.jpg"
      );
      };
      
      if ($character=='coco') {
      $name = 'Coco';
      $alllink = array(
      "https://i.postimg.cc/MZD9cvH5/coco-1.png",
"https://i.postimg.cc/N0m4Q0Z1/coco-10.jpg",
"https://i.postimg.cc/8zrdb5pq/coco-11.png",
"https://i.postimg.cc/c4kTm2Q8/coco-12.png",
"https://i.postimg.cc/qvgDH4kL/coco-13.jpg",
"https://i.postimg.cc/6QvHTc44/coco-14.jpg",
"https://i.postimg.cc/HWQf6Yx8/coco-15.jpg",
"https://i.postimg.cc/rmGQNpJ8/coco-16.jpg",
"https://i.postimg.cc/D0B6RYHH/coco-17.jpg",
"https://i.postimg.cc/xT83c5Wj/coco-18.png",
"https://i.postimg.cc/bN5Hbbhx/coco-19.png",
"https://i.postimg.cc/BbQc5Bbg/coco-2.png",
"https://i.postimg.cc/1XC0vVNZ/coco-20.png",
"https://i.postimg.cc/7PmNHdtQ/coco-21.jpg",
"https://i.postimg.cc/P5kJBrzG/coco-22.png",
"https://i.postimg.cc/jdfCgJfQ/coco-23.jpg",
"https://i.postimg.cc/XvfwTzyL/coco-24.jpg",
"https://i.postimg.cc/7brP8mz1/coco-25.png",
"https://i.postimg.cc/L5XLg4QQ/coco-3.jpg",
"https://i.postimg.cc/0ypMQJ22/coco-4.jpg",
"https://i.postimg.cc/85wLCf4r/coco-5.jpg",
"https://i.postimg.cc/VNKqFHrV/coco-6.png",
"https://i.postimg.cc/X7tdXbfx/coco-7.jpg",
"https://i.postimg.cc/XqpB7HXT/coco-8.jpg",
"https://i.postimg.cc/TwSnzLcj/coco-9.png"
    );
    };
    
    if ($character=='rushia') {
      $name = 'Rushia';
      $alllink = array(
      "https://i.postimg.cc/xjMJRTZz/Rushia-1.jpg",
"https://i.postimg.cc/xTPXwpnj/Rushia-10.jpg",
"https://i.postimg.cc/wMX1T0NV/Rushia-11.jpg",
"https://i.postimg.cc/qvMN4cvs/Rushia-12.jpg",
"https://i.postimg.cc/ZKm9DzkD/Rushia-13.jpg",
"https://i.postimg.cc/1RGXF7g0/Rushia-14.jpg",
"https://i.postimg.cc/MGgH7hb5/Rushia-15.png",
"https://i.postimg.cc/JhH4zpVk/Rushia-16.png",
"https://i.postimg.cc/Y9g9bbdH/Rushia-17.jpg",
"https://i.postimg.cc/x1xcCkXW/Rushia-18.jpg",
"https://i.postimg.cc/qvRv9k1Q/Rushia-19.jpg",
"https://i.postimg.cc/J05hWtwY/Rushia-2.jpg",
"https://i.postimg.cc/7L5bTx7b/Rushia-20.jpg",
"https://i.postimg.cc/GtCpNGfs/Rushia-21.jpg",
"https://i.postimg.cc/65zQj7fy/Rushia-22.jpg",
"https://i.postimg.cc/gkGJHyRC/Rushia-23.jpg",
"https://i.postimg.cc/jSFSTG9T/Rushia-24.jpg",
"https://i.postimg.cc/d1MQkGwS/Rushia-25.jpg",
"https://i.postimg.cc/hj9D9hG4/Rushia-3.jpg",
"https://i.postimg.cc/6QZtXTnV/Rushia-4.png",
"https://i.postimg.cc/RVCSHSx9/Rushia-5.jpg",
"https://i.postimg.cc/1XByjT6L/Rushia-6.jpg",
"https://i.postimg.cc/Wb92mBsZ/Rushia-7.jpg",
"https://i.postimg.cc/brpzL8Gx/Rushia-8.png",
"https://i.postimg.cc/3rFrNy6n/Rushia-9.jpg"
   );
   };
    
  // Add characters according to old law:
  /*
      if ($character=='name received') {
       $name = 'name res';
       $alllink = array(
       All photo links here
       );
      };
  */

    $num = array_rand($alllink);
    $link = $alllink [$num];

    $ketqua = array(
    "status" => "ok",
    "name" => $name,
    "url" => $link,
    "count" => count($alllink),
    "author" => "SaikiDesu",
    );

    $cc = json_encode($ketqua , JSON_UNESCAPED_UNICODE);
    $one = ['\/v\/','\/'];
    $two = ['/v/','/'];
    $end = str_replace($one, $two, $cc);
    echo $end;
  };
}
else {
  echo '<head><style>body {background-color: #3f403d;}</style></head><body><b><span style="font-size:20px">Welcome to my Simple API</span></b><br><br><b><font color="#f0f0f0">Get data by link:</font></b><br><font color="#b8adad">api.randvtuber-saikidesu.ml?character=</font> character name here<br><br><b><font color="#f0f0f0">Existing characters:</font></b> gura, pekora, korone, uto, mumei, koyori, fubuki, chloe, ayame, polka, botan, amelia, okayu, watame, aloe, marine, coco, rushia<br><br><b><u>Facebook:</u></b> <a href ="https://www.facebook.com/profile.php?id=100080934841785"><font color="#b8adad">SaikiDesu</font></a></body>';
};
