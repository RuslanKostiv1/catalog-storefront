<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Metadata;

class Catalog
{
    public static $is_initialized = false;

    public static function initOnce()
    {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
            return;
        }
        $pool->internalAddGeneratedFile(hex2bin(
            "0ace400a0d636174616c6f672e70726f746f12226d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f22be0b0a0750" .
            "726f64756374120a0a02696418012001280912180a106174747269627574" .
            "655f7365745f696418022001280912130a0b6861735f6f7074696f6e7318" .
            "032001280812120a0a637265617465645f617418052001280912120a0a75" .
            "7064617465645f6174180620012809120b0a03736b75180720012809120f" .
            "0a07747970655f6964180820012809120e0a067374617475731809200128" .
            "0912140a0c73746f636b5f737461747573180a20012809120c0a046e616d" .
            "6518112001280912130a0b6465736372697074696f6e1812200128091219" .
            "0a1173686f72745f6465736372697074696f6e181320012809120f0a0775" .
            "726c5f6b657918142001280912150a0d67696674636172645f7479706518" .
            "1520012809120b0a03717479181b2001280212140a0c7461785f636c6173" .
            "735f6964181c20012809120e0a06776569676874181d2001280212390a06" .
            "696d61676573181e2003280b32292e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e496d61676512390a0676" .
            "6964656f73181f2003280b32292e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e566964656f123b0a077361" .
            "6d706c657318202003280b322a2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e53616d706c6512120a0a76" .
            "69736962696c69747918252001280912410a0a6174747269627574657318" .
            "322003280b322d2e6d6167656e746f2e636174616c6f6753746f72656672" .
            "6f6e744170692e70726f746f2e41747472696275746512180a106d657461" .
            "5f6465736372697074696f6e18162001280912140a0c6d6574615f6b6579" .
            "776f726418172001280912120a0a6d6574615f7469746c65181820012809" .
            "12120a0a63617465676f7269657318192003280912180a10726571756972" .
            "65645f6f7074696f6e7318462001280912120a0a637265617465645f696e" .
            "184a2001280912120a0a757064617465645f696e184b2001280912210a19" .
            "7175616e746974795f616e645f73746f636b5f737461747573184c200128" .
            "0912190a116f7074696f6e735f636f6e7461696e6572184d200128091226" .
            "0a1e6d7372705f646973706c61795f61637475616c5f70726963655f7479" .
            "7065184e2001280912150a0d69735f72657475726e61626c65184f200128" .
            "0912120a0a75726c5f737566666978185020012809123b0a076f7074696f" .
            "6e7318512003280b322a2e6d6167656e746f2e636174616c6f6753746f72" .
            "6566726f6e744170692e70726f746f2e4f7074696f6e12440a0c75726c5f" .
            "726577726974657318522003280b322e2e6d6167656e746f2e636174616c" .
            "6f6753746f726566726f6e744170692e70726f746f2e55726c5265777269" .
            "7465121e0a16636f756e7472795f6f665f6d616e75666163747572651855" .
            "2001280912150a0d7370656369616c5f707269636518572001280212190a" .
            "117370656369616c5f66726f6d5f6461746518582001280912170a0f7370" .
            "656369616c5f746f5f6461746518592001280912370a056c696e6b73185a" .
            "2003280b32282e6d6167656e746f2e636174616c6f6753746f726566726f" .
            "6e744170692e70726f746f2e4c696e6b12150a0d63616e6f6e6963616c5f" .
            "75726c185b2001280912120a0a70726963655f7669657718602001280912" .
            "220a1a6c696e6b735f7075726368617365645f73657061726174656c7918" .
            "6220012808121c0a146f6e6c795f785f6c6566745f696e5f73746f636b18" .
            "6620012802124b0a0f70726f647563745f6f7074696f6e7318c701200328" .
            "0b32312e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e50726f647563744f7074696f6e125d0a1573686f70" .
            "7065725f696e7075745f6f7074696f6e7318c8012003280b323d2e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e50726f6475637453686f70706572496e7075744f7074696f6e22470a" .
            "0e50726f6475637456617269616e74120a0a02696418012001280912150a" .
            "0d6f7074696f6e5f76616c75657318022003280912120a0a70726f647563" .
            "745f696418032001280922390a1450726f6475637456617269616e74496d" .
            "706f7274120a0a02696418012001280912150a0d6f7074696f6e5f76616c" .
            "75657318022003280922420a05507269636512150a0d726567756c61725f" .
            "707269636518012001280212130a0b66696e616c5f707269636518022001" .
            "2802120d0a0573636f706518032001280922ad010a1250726f647563744f" .
            "7074696f6e56616c7565120a0a026964180120012809120d0a056c616265" .
            "6c18022001280912120a0a736f72745f6f72646572180320012809120f0a" .
            "0764656661756c7418042001280812110a09696d6167655f75726c180520" .
            "01280912160a0e7174795f6d75746162696c697479180620012808120b0a" .
            "0371747918072001280212100a08696e666f5f75726c180820012809120d" .
            "0a05707269636518092001280222bb010a0d50726f647563744f7074696f" .
            "6e120a0a026964180120012809120d0a056c6162656c1802200128091212" .
            "0a0a736f72745f6f7264657218032001280512100a087265717569726564" .
            "18042001280812130a0b72656e6465725f74797065180520012809120c0a" .
            "047479706518062001280912460a0676616c75657318072003280b32362e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e50726f647563744f7074696f6e56616c756522ae020a195072" .
            "6f6475637453686f70706572496e7075744f7074696f6e120a0a02696418" .
            "0120012809120d0a056c6162656c18022001280912120a0a736f72745f6f" .
            "7264657218032001280512100a0872657175697265641804200128081213" .
            "0a0b72656e6465725f7479706518052001280912380a0570726963651806" .
            "2003280b32292e6d6167656e746f2e636174616c6f6753746f726566726f" .
            "6e744170692e70726f746f2e507269636512160a0e66696c655f65787465" .
            "6e73696f6e180720032809123d0a0572616e676518082001280b322e2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e56616c756552616e676512140a0c696d6167655f73697a655f78" .
            "18092001280512140a0c696d6167655f73697a655f79180a200128052226" .
            "0a0a56616c756552616e6765120c0a0466726f6d180120012802120a0a02" .
            "746f18022001280222470a044c696e6b12120a0a70726f647563745f6964" .
            "18012001280912100a08706f736974696f6e180220012805120c0a047479" .
            "7065180320012809120b0a0371747918042001280222f5030a064f707469" .
            "6f6e12110a096f7074696f6e5f696418012001280912120a0a70726f6475" .
            "63745f6964180220012809120c0a047479706518032001280912120a0a69" .
            "735f72657175697265180420012809120b0a03736b751805200128091216" .
            "0a0e6d61785f6368617261637465727318062001280912160a0e66696c65" .
            "5f657874656e73696f6e18072001280912140a0c696d6167655f73697a65" .
            "5f7818082001280912140a0c696d6167655f73697a655f79180920012809" .
            "12120a0a736f72745f6f72646572180a2001280912150a0d64656661756c" .
            "745f7469746c65180b2001280912130a0b73746f72655f7469746c65180c" .
            "20012809120d0a057469746c65180d2001280912150a0d64656661756c74" .
            "5f7072696365180e20012809121a0a1264656661756c745f70726963655f" .
            "74797065180f2001280912130a0b73746f72655f70726963651810200128" .
            "0912180a1073746f72655f70726963655f74797065181120012809120d0a" .
            "05707269636518122001280912120a0a70726963655f7479706518132001" .
            "280912100a08726571756972656418142001280912130a0b70726f647563" .
            "745f736b75181520012809123e0a0576616c756518162003280b322f2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e4f7074696f6e56616c756522ab030a0b4f7074696f6e56616c75" .
            "6512110a096f7074696f6e5f696418012001280912120a0a70726f647563" .
            "745f6964180220012809120c0a047479706518032001280912120a0a6973" .
            "5f72657175697265180420012809120b0a03736b7518052001280912160a" .
            "0e6d61785f6368617261637465727318062001280912160a0e66696c655f" .
            "657874656e73696f6e18072001280912140a0c696d6167655f73697a655f" .
            "7818082001280912140a0c696d6167655f73697a655f7918092001280912" .
            "120a0a736f72745f6f72646572180a2001280912150a0d64656661756c74" .
            "5f7469746c65180b2001280912130a0b73746f72655f7469746c65180c20" .
            "012809120d0a057469746c65180d2001280912150a0d64656661756c745f" .
            "7072696365180e20012809121a0a1264656661756c745f70726963655f74" .
            "797065180f2001280912130a0b73746f72655f7072696365181020012809" .
            "12180a1073746f72655f70726963655f74797065181120012809120d0a05" .
            "707269636518122001280912120a0a70726963655f747970651813200128" .
            "0912160a0e6f7074696f6e5f747970655f696418142001280922660a0a55" .
            "726c52657772697465120b0a0375726c180120012809124b0a0a70617261" .
            "6d657465727318022003280b32372e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e55726c52657772697465" .
            "506172616d6574657222320a1355726c52657772697465506172616d6574" .
            "6572120c0a046e616d65180120012809120d0a0576616c75651802200128" .
            "0922260a084b657956616c7565120b0a036b6579180120012809120d0a05" .
            "76616c756518022001280922370a09417474726962757465120c0a04636f" .
            "6465180120012809120c0a0474797065180220012809120e0a0676616c75" .
            "6573180320032809223a0a0d4d656469615265736f75726365120b0a0375" .
            "726c180120012809120d0a056c6162656c180220012809120d0a05726f6c" .
            "657318032003280922600a05496d61676512430a087265736f7572636518" .
            "012001280b32312e6d6167656e746f2e636174616c6f6753746f72656672" .
            "6f6e744170692e70726f746f2e4d656469615265736f7572636512120a0a" .
            "736f72745f6f7264657218022001280922610a0653616d706c6512430a08" .
            "7265736f7572636518012001280b32312e6d6167656e746f2e636174616c" .
            "6f6753746f726566726f6e744170692e70726f746f2e4d65646961526573" .
            "6f7572636512120a0a736f72745f6f72646572180220012809229d010a05" .
            "566964656f12420a077072657669657718012001280b32312e6d6167656e" .
            "746f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e" .
            "4d656469615265736f75726365123c0a05766964656f18022001280b322d" .
            "2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e" .
            "70726f746f2e566964656f4974656d12120a0a736f72745f6f7264657218" .
            "03200128092292010a09566964656f4974656d12160a0e766964656f5f70" .
            "726f766964657218012001280912110a09766964656f5f75726c18022001" .
            "280912130a0b766964656f5f7469746c6518032001280912190a11766964" .
            "656f5f6465736372697074696f6e18042001280912160a0e766964656f5f" .
            "6d6574616461746118052001280912120a0a6d656469615f747970651806" .
            "2001280922490a1250726f647563747347657452657175657374120b0a03" .
            "696473180120032809120d0a0573746f726518022001280912170a0f6174" .
            "747269627574655f636f646573180320032809224f0a1150726f64756374" .
            "73476574526573756c74123a0a056974656d7318012003280b322b2e6d61" .
            "67656e746f2e636174616c6f6753746f726566726f6e744170692e70726f" .
            "746f2e50726f6475637422b4010a15496d706f727450726f647563747352" .
            "657175657374124e0a0870726f647563747318012003280b323c2e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e496d706f727450726f647563744461746152657175657374120d0a05" .
            "73746f7265180220012809123c0a06706172616d7318062001280b322c2e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e4b657956616c7565226c0a18496d706f727450726f64756374" .
            "4461746152657175657374123c0a0770726f6475637418012001280b322b" .
            "2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e" .
            "70726f746f2e50726f6475637412120a0a61747472696275746573180220" .
            "032809223a0a1544656c65746550726f6475637473526571756573741212" .
            "0a0a70726f64756374496473180120032809120d0a0573746f7265180220" .
            "012809223d0a1744656c65746543617465676f7269657352657175657374" .
            "12130a0b63617465676f7279496473180120032809120d0a0573746f7265" .
            "180220012809223b0a1844656c65746543617465676f7269657352657370" .
            "6f6e7365120e0a06737461747573180120012808120f0a076d6573736167" .
            "6518022001280922390a16496d706f727450726f6475637473526573706f" .
            "6e7365120e0a06737461747573180120012808120f0a076d657373616765" .
            "18022001280922390a1644656c65746550726f6475637473526573706f6e" .
            "7365120e0a06737461747573180120012808120f0a076d65737361676518" .
            "022001280922b9010a17496d706f727443617465676f7269657352657175" .
            "65737412510a0a63617465676f7269657318012003280b323d2e6d616765" .
            "6e746f2e636174616c6f6753746f726566726f6e744170692e70726f746f" .
            "2e496d706f727443617465676f72794461746152657175657374120d0a05" .
            "73746f7265180220012809123c0a06706172616d7318062001280b322c2e" .
            "6d6167656e746f2e636174616c6f6753746f726566726f6e744170692e70" .
            "726f746f2e4b657956616c7565226f0a19496d706f727443617465676f72" .
            "794461746152657175657374123e0a0863617465676f727918012001280b" .
            "322c2e6d6167656e746f2e636174616c6f6753746f726566726f6e744170" .
            "692e70726f746f2e43617465676f727912120a0a61747472696275746573" .
            "180220032809223b0a18496d706f727443617465676f7269657352657370" .
            "6f6e7365120e0a06737461747573180120012808120f0a076d6573736167" .
            "6518022001280922db040a0843617465676f7279120a0a02696418012001" .
            "2809120c0a047061746818022001280912100a08706f736974696f6e1803" .
            "20012805120d0a056c6576656c18042001280512160a0e6368696c647265" .
            "6e5f636f756e74180520012805120c0a046e616d6518062001280912140a" .
            "0c646973706c61795f6d6f646518072001280912170a0f64656661756c74" .
            "5f736f72745f6279180820012809120f0a0775726c5f6b65791809200128" .
            "0912100a0875726c5f70617468180a2001280912110a0969735f61637469" .
            "7665180b2001280812110a0969735f616e63686f72180c2001280812170a" .
            "0f696e636c7564655f696e5f6d656e75180d2001280812190a1161766169" .
            "6c61626c655f736f72745f6279180e2003280912430a0b62726561646372" .
            "756d6273180f2003280b322e2e6d6167656e746f2e636174616c6f675374" .
            "6f726566726f6e744170692e70726f746f2e42726561646372756d621213" .
            "0a0b6465736372697074696f6e18102001280912150a0d63616e6f6e6963" .
            "616c5f75726c18112001280912150a0d70726f647563745f636f756e7418" .
            "122001280312100a086368696c6472656e181320032809120d0a05696d61" .
            "676518142001280912110a09706172656e745f696418152001280912120a" .
            "0a6d6574615f7469746c6518162001280912180a106d6574615f64657363" .
            "72697074696f6e18172001280912150a0d6d6574615f6b6579776f726473" .
            "18182001280912410a0a6174747269627574657318322003280b322d2e6d" .
            "6167656e746f2e636174616c6f6753746f726566726f6e744170692e7072" .
            "6f746f2e4174747269627574652285010a0a42726561646372756d621213" .
            "0a0b63617465676f72795f696418012001280912150a0d63617465676f72" .
            "795f6e616d6518022001280912160a0e63617465676f72795f6c6576656c" .
            "18032001280512180a1063617465676f72795f75726c5f6b657918042001" .
            "280912190a1163617465676f72795f75726c5f7061746818052001280922" .
            "5a0a1443617465676f7269657347657452657175657374120b0a03696473" .
            "180120032809120d0a056c6576656c180220012805120d0a0573746f7265" .
            "18032001280912170a0f6174747269627574655f636f6465731804200328" .
            "0922540a1543617465676f72696573476574526573706f6e7365123b0a05" .
            "6974656d7318012003280b322c2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e43617465676f727922660a" .
            "1650726f6475637456617269616e74526573706f6e7365124c0a106d6174" .
            "636865645f76617269616e747318032003280b32322e6d6167656e746f2e" .
            "636174616c6f6753746f726566726f6e744170692e70726f746f2e50726f" .
            "6475637456617269616e74223a0a1550726f6475637456617269616e7452" .
            "65717565737412120a0a70726f647563745f4964180120012809120d0a05" .
            "73746f726518022001280922630a15496d706f727456617269616e747352" .
            "657175657374124a0a0876617269616e747318012003280b32382e6d6167" .
            "656e746f2e636174616c6f6753746f726566726f6e744170692e70726f74" .
            "6f2e50726f6475637456617269616e74496d706f727422390a16496d706f" .
            "727456617269616e7473526573706f6e7365120e0a067374617475731801" .
            "20012808120f0a076d65737361676518022001280922230a1544656c6574" .
            "6556617269616e747352657175657374120a0a0269641801200328092239" .
            "0a1644656c65746556617269616e7473526573706f6e7365120e0a067374" .
            "61747573180120012808120f0a076d65737361676518022001280922370a" .
            "164f7074696f6e53656c656374696f6e52657175657374120d0a0573746f" .
            "7265180120012809120e0a0676616c75657318022003280932ce060a0743" .
            "6174616c6f67127e0a0b67657450726f647563747312362e6d6167656e74" .
            "6f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e50" .
            "726f6475637473476574526571756573741a352e6d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f2e50726f6475" .
            "637473476574526573756c7422001289010a0e696d706f727450726f6475" .
            "63747312392e6d6167656e746f2e636174616c6f6753746f726566726f6e" .
            "744170692e70726f746f2e496d706f727450726f64756374735265717565" .
            "73741a3a2e6d6167656e746f2e636174616c6f6753746f726566726f6e74" .
            "4170692e70726f746f2e496d706f727450726f6475637473526573706f6e" .
            "736522001289010a0e64656c65746550726f647563747312392e6d616765" .
            "6e746f2e636174616c6f6753746f726566726f6e744170692e70726f746f" .
            "2e44656c65746550726f6475637473526571756573741a3a2e6d6167656e" .
            "746f2e636174616c6f6753746f726566726f6e744170692e70726f746f2e" .
            "44656c65746550726f6475637473526573706f6e73652200128f010a1064" .
            "656c65746543617465676f72696573123b2e6d6167656e746f2e63617461" .
            "6c6f6753746f726566726f6e744170692e70726f746f2e44656c65746543" .
            "617465676f72696573526571756573741a3c2e6d6167656e746f2e636174" .
            "616c6f6753746f726566726f6e744170692e70726f746f2e44656c657465" .
            "43617465676f72696573526573706f6e73652200128f010a10696d706f72" .
            "7443617465676f72696573123b2e6d6167656e746f2e636174616c6f6753" .
            "746f726566726f6e744170692e70726f746f2e496d706f72744361746567" .
            "6f72696573526571756573741a3c2e6d6167656e746f2e636174616c6f67" .
            "53746f726566726f6e744170692e70726f746f2e496d706f727443617465" .
            "676f72696573526573706f6e736522001286010a0d67657443617465676f" .
            "7269657312382e6d6167656e746f2e636174616c6f6753746f726566726f" .
            "6e744170692e70726f746f2e43617465676f726965734765745265717565" .
            "73741a392e6d6167656e746f2e636174616c6f6753746f726566726f6e74" .
            "4170692e70726f746f2e43617465676f72696573476574526573706f6e73" .
            "65220032d5040a0e56617269616e74536572766963651290010a15696d70" .
            "6f727450726f6475637456617269616e747312392e6d6167656e746f2e63" .
            "6174616c6f6753746f726566726f6e744170692e70726f746f2e496d706f" .
            "727456617269616e7473526571756573741a3a2e6d6167656e746f2e6361" .
            "74616c6f6753746f726566726f6e744170692e70726f746f2e496d706f72" .
            "7456617269616e7473526573706f6e736522001290010a1564656c657465" .
            "50726f6475637456617269616e747312392e6d6167656e746f2e63617461" .
            "6c6f6753746f726566726f6e744170692e70726f746f2e44656c65746556" .
            "617269616e7473526571756573741a3a2e6d6167656e746f2e636174616c" .
            "6f6753746f726566726f6e744170692e70726f746f2e44656c6574655661" .
            "7269616e7473526573706f6e73652200128d010a1267657450726f647563" .
            "7456617269616e747312392e6d6167656e746f2e636174616c6f6753746f" .
            "726566726f6e744170692e70726f746f2e50726f6475637456617269616e" .
            "74526571756573741a3a2e6d6167656e746f2e636174616c6f6753746f72" .
            "6566726f6e744170692e70726f746f2e50726f6475637456617269616e74" .
            "526573706f6e73652200128c010a1067657456617269616e74734d617463" .
            "68123a2e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e4f7074696f6e53656c656374696f6e526571756573" .
            "741a3a2e6d6167656e746f2e636174616c6f6753746f726566726f6e7441" .
            "70692e70726f746f2e50726f6475637456617269616e74526573706f6e73" .
            "6522004228e202254d6167656e746f5c436174616c6f6753746f72656672" .
            "6f6e744170695c4d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
