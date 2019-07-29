<?php

return [
    'alipay' => [
        'app_id'         => '2016092300574673',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAzfY6iiirel9WMH4EvQOD8+C44fP1Qm3EaWIu8RVUAnxqrqcCjpndRTT9a0NmVS8GFRVBfQ2D8mvgb0A5i/KBKnTWHB+XXybnm8Qo32wGhnQiT8htgZAmfTEZyTL0A3FLU8FnkjW6MzqpMQDlDvuXPH45QxY+lWxmbYq0JEcVN2ka2+TozEbxKk1K4JNSxCUNtKqXxTL+GHM25JyUseewiXaM65eJT8iRrmbPlWDWDJngHVaO68NKhOjREYkNoMRpxLStWBSMIGwJEUpNf3Qyv9uodZ8mtYizInx5l833IN17QlIeSVH/Olcw+Lrkg+uVElFM3AO5Vxp7B+FiFCpf4QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEA3TWbLnbtmf/4tEjd2T0I2019BRUIYqRBRWGTaIPvDTeaFhAtaYVj2FANbFDWLo5+/RW1IJ0MqU6R3yB3mrYi/7aXKlKrPLxSmyV/Cg76Quz9gu//UTlK8z22AE3jHEZW25lzwg4O2yBLB00KqzCCM7dyqa36A1B7369ypeD0/WFu/dxTuGj/Bfk+p8CCtpUXf/nZaanSAUIOL77QHB76M2nqRcQEGCBR5Gn9dwcEsiFAU7ipCKDcIZfCVp9sK2vHcq6yXzwPLCNkLQAPvkAptbDzKPzBkbGtaRHy5hOl4qPQfE5zvwTgMamh7Y/k+AN7uJXZAxtB4UFe/lwRowdSwwIDAQABAoIBAFV2qIXDHPkqlAPTQyLzGcDgpzSXc63ol+8eS71Ne8Y3fSiZB3KFPpYMF6OJd7Z1B0rwYBJBmuqumF0ERjFXvR3ehXish8vnVmLqkbJpJvdEaI11+8Z9xB9F8FMdxGjgJB6jor2OgN7YEyS29zA8hZFFht9XgAhXyAQb3MeJqh1aF2mtHjiiiJS2EVGFmbDSHfFbxnTC7TwqCF9f2xZ/QNiO0w5DpF688hm2J7dgJ6c5rxZmvsaEtVBdssBe58zM56+XdnU78YMzDyBLgwXSL/F6VzTKeBJhRlRXDGOa0n5FUt9K0WV38TaslIBeIho7oUou/gE4W5oGTdgVoXkQQwECgYEA94qgw5eMnOq0E/hE4J+LDFV/3G0lBHfsqx6Enm2BdxU/2csqx2xOq4ufaKow1DGeSPn12vue4xeg1TGRZGUHCliP8UFaRrxLHQBuQP2hXpytj0hFG6W28jFz13bFRG/un5sAv0IeAQfol8KblK3xHwKwXRuYKNGOL3ODG+gOFXMCgYEA5MSjQhjtMegqK9JvoTdax24o3N6oiKHEo2/w4z2YgQRI2Esh58yQXgytH/JeVARCWz4KF8Ow4zrJ15Fsa8q2tdua2eadCyzoMFSpZHTcC7AAeKyHomUM16HDysQUz1v7JQY11kt3v9/tvKFXxtzRx9LuYSEeWQRbWKXoosGB+XECgYEAsl/xsp+tEpHJy64WK+qrburZZQQ9LXghUbl/BQ6RwTbNuOo+3E8+bT0CVJB2+SD8F0gPkonIl4m6OoYqZ7apGRpyNv3JyLj8Q1zBFhHty1iJdHs2WVLTfriF6hhK1CL4R4iRRECnkESbpWf1ZnDlFFyCq8UroxZGKAlLy7svEuMCgYA5klb3smg3EBNU1e+r5c9dsxZrh0looTVoYCqCNaUkitx+OmI9AJkwYgZLrOYaRLwiVDmcA26HsOrM6lcbxXc3yx1sSwIoptOEHjpHArXB5zgnJlw3/TA/MAGjDLej+6T3i1mPJYzsZ8FfoEcDz9ynaij9nqURh+wpIg+qrgI0sQKBgEkThGzeSvZQ7elBMCR0hhNNamTaT4MU4gDOcDvMe3SgpIVnNR2eKX4F0ELZFRxKZXihBDtwuNOwbpGZuM4qpIN30RKRNm01BcPwl0fPoeeODmQvlfa+eIAwttjHzgO95vl5xL/07CCM6hauJLz2dnZPLicrdRfA3l34qdgsEKAv',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
