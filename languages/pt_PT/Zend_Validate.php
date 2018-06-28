<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/zf2 for the canonical source repository
 * @copyright  Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

/**
 * EN-Revision: 16.Jun.2015
 */
return [
    // Zend\Authentication\Validator\Authentication
    "Invalid identity" => "Identidade inválida",
    "Identity is ambiguous" => "Identidade ambígua",
    "Invalid password" => "Senha incorreta",
    "Authentication failed" => "Autenticação falhou",

    // Zend\I18n\Validator\Alnum
    "Invalid type given. String, integer or float expected" => "O tipo do valor introduzido é inválido, o valor deve ser float, string ou inteiro",
    "The input contains characters which are non alphabetic and no digits" => "O valor introduzido contém caracteres que não são alfabéticos e nem dígitos",
    "The input is an empty string" => "O valor introduzido é uma string vazia",

    // Zend\I18n\Validator\Alpha
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser string",
    "The input contains non alphabetic characters" => "O valor introduzido contém caracteres não alfabéticos",
    "The input is an empty string" => "O valor introduzido é uma string vazia",

    // Zend\I18n\Validator\DateTime
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser string",
    "The input does not appear to be a valid datetime" => "O valor introduzido não parece ser uma data e hora válida",

    // Zend\I18n\Validator\IsFloat
    "Invalid type given. String, integer or float expected" => "O tipo do valor introduzido é inválido, o valor deve ser float, string ou inteiro",
    "The input does not appear to be a float" => "O valor introduzido não parece ser do tipo float",

    // Zend\I18n\Validator\IsInt
    "Invalid type given. String or integer expected" => "O tipo do valor introduzido é inválido, o valor deve ser string ou inteiro",
    "The input does not appear to be an integer" => "O valor introduzido não parece ser do tipo inteiro",

    // Zend\I18n\Validator\PhoneNumber
    "The input does not match a phone number format" => "O valor introduzido não é um número de telefone",
    "The country provided is currently unsupported" => "O país fornecido não é suportado de momento",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",

    // Zend\I18n\Validator\PostCode
    "Invalid type given. String or integer expected" => "O tipo do valor introduzido é inválido, o valor deve ser string ou inteiro",
    "The input does not appear to be a postal code" => "O valor introduzido não parece ser um código postal",
    "An exception has been raised while validating the input" => "Uma exceção foi lançada durante a validação do valor introduzido",

    // Zend\Validator\Barcode
    "The input failed checksum validation" => "O valor introduzido falhou na validação do checksum",
    "The input contains invalid characters" => "O valor introduzido contém caracteres inválidos",
    "The input should have a length of %length% characters" => "O valor introduzido deveria ter %length% caracteres de comprimento",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser string",

    // Zend\Validator\Between
    "The input is not between '%min%' and '%max%', inclusively" => "O valor introduzido não está entre '%min%' e '%max%', inclusivamente",
    "The input is not strictly between '%min%' and '%max%'" => "O valor introduzido não está estritamente entre '%min%' e '%max%'",

    // Zend\Validator\Bitwise
    "The input has no common bit set with '%control%'" => "O valor introduzido não possui o bit comum definido como '%control%'",
    "The input doesn't have the same bits set as '%control%'" => "O valor introduzido não possui o mesmo conjunto de bits do que '%control%'",
    "The input has common bit set with '%control%'" => "O valor introduzido possui o mesmo conjunto de bits do que '%control%'",

    // Zend\Validator\Callback
    "The input is not valid" => "O valor introduzido não é válido",
    "An exception has been raised within the callback" => "Uma exceção foi lançada na chamada de retorno",

    // Zend\Validator\CreditCard
    "The input seems to contain an invalid checksum" => "O valor introduzido parece conter um checksum inválido",
    "The input must contain only digits" => "O valor introduzido deve conter apenas dígitos",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser string",
    "The input contains an invalid amount of digits" => "O valor introduzido contém uma quantidade inválida de dígitos",
    "The input is not from an allowed institute" => "O valor introduzido não vem de uma instituição autorizada",
    "The input seems to be an invalid credit card number" => "O valor introduzido parece ser um número de cartão de crédito inválido",
    "An exception has been raised while validating the input" => "Uma exceção foi lançada durante a validação do valor introduzido",

    // Zend\Validator\Csrf
    "The form submitted did not originate from the expected site" => "O formulário apresentado não se originou a partir do site esperado",

    // Zend\Validator\Date
    "Invalid type given. String, integer, array or DateTime expected" => "O tipo do valor introduzido é inválido, o valor deve ser string, inteiro, array ou DateTime",
    "The input does not appear to be a valid date" => "O valor introduzido não parece ser uma data válida",
    "The input does not fit the date format '%format%'" => "O valor introduzido não se encontra no formato de data '%format%'",

    // Zend\Validator\DateStep
    "Invalid type given. String, integer, array or DateTime expected" => "O tipo do valor introduzido é inválido, o valor deve ser string, inteiro, array ou DateTime",
    "The input does not appear to be a valid date" => "O valor introduzido não parece ser uma data válida",
    "The input does not fit the date format '%format%'" => "O valor introduzido não se encontra no formato '%format%'",
    "The input is not a valid step" => "O valor introduzido não é um passo válido",

    // Zend\Validator\Db_AbstractDb
    "No record matching the input was found" => "Não foi encontrado nenhum registro para o valor introduzido",
    "A record matching the input was found" => "Um registro foi encontrado para o valor introduzido",

    // Zend\Validator\Digits
    "The input must contain only digits" => "O valor introduzido deve conter apenas dígitos",
    "The input is an empty string" => "O valor introduzido é uma string vazia",
    "Invalid type given. String, integer or float expected" => "O tipo do valor introduzido é inválido, o valor deve ser string, inteiro ou float",

    // Zend\Validator\EmailAddress
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser do tipo string",
    "The input is not a valid email address. Use the basic format local-part@hostname" => "O valor introduzido não é um endereço de e-mail válido. Utilize o formato identificador@domínio",
    "'%hostname%' is not a valid hostname for the email address" => "'%hostname%' não é um domínio válido para o endereço de e-mail",
    "'%hostname%' does not appear to have any valid MX or A records for the email address" => "'%hostname%' não parece ter um registro MX ou A válido para o endereço de e-mail",
    "'%hostname%' is not in a routable network segment. The email address should not be resolved from public network" => "'%hostname%' não é um segmento de rede roteável. O endereço de e-mail não deve ser resolvido a partir de uma rede pública.",
    "'%localPart%' can not be matched against dot-atom format" => "'%localPart%' não corresponde com o formato dot-atom",
    "'%localPart%' can not be matched against quoted-string format" => "'%localPart%' não corresponde com o formato quoted-string",
    "'%localPart%' is not a valid local part for the email address" => "'%localPart%' não é um identificador válido para o endereço de e-mail",
    "The input exceeds the allowed length" => "O valor introduzido excede o comprimento permitido",

    // Zend\Validator\Explode
    "Invalid type given" => "O tipo do valor introduzido é inválido",

    // Zend\Validator\File\Count
    "Too many files, maximum '%max%' are allowed but '%count%' are given" => "Número excessivo de ficheiros, são permitidos no máximo '%max%', mas '%count%' foram fornecidos",
    "Too few files, minimum '%min%' are expected but '%count%' are given" => "Número insuficiente de ficheiros, são esperados no mínimo '%min%', mas '%count%' foram fornecidos",

    // Zend\Validator\File\Crc32
    "File does not match the given crc32 hashes" => "O ficheiro não corresponde à hash crc32 fornecida",
    "A crc32 hash could not be evaluated for the given file" => "Não foi possível avaliar uma hash crc32 para o ficheiro fornecido",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\ExcludeExtension
    "File has an incorrect extension" => "O ficheiro possui uma extensão incorreta",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\Exists
    "File does not exist" => "O ficheiro não existe",

    // Zend\Validator\File\Extension
    "File has an incorrect extension" => "O ficheiro possui uma extensão incorreta",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\FilesSize
    "All files in sum should have a maximum size of '%max%' but '%size%' were detected" => "A soma do tamanho de todos os ficheiros deve ter um máximo de '%max%', mas um tamanho de '%size%' foi detectado",
    "All files in sum should have a minimum size of '%min%' but '%size%' were detected" => "A soma do tamanho de todos os ficheiros deve ter um mínimo de '%min%', mas um tamanho de '%size%' foi detectado",
    "One or more files can not be read" => "Um ou mais ficheiros não podem ser lidos",

    // Zend\Validator\File\Hash
    "File does not match the given hashes" => "O ficheiro não corresponde às hashes fornecidas",
    "A hash could not be evaluated for the given file" => "Não foi possível avaliar uma hash para o ficheiro fornecido",
    "File is not readable or does not exist"  => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\ImageSize
    "Maximum allowed width for image should be '%maxwidth%' but '%width%' detected" => "A largura máxima permitida para a imagem deveria ser '%maxwidth%', mas '%width%' foi detectada",
    "Minimum expected width for image should be '%minwidth%' but '%width%' detected" => "A largura mínima esperada para a imagem deveria ser '%minwidth%', mas '%width%' foi detectada",
    "Maximum allowed height for image should be '%maxheight%' but '%height%' detected" => "A altura máxima permitida para a imagem deveria ser '%maxheight%', mas '%height%' foi detectada",
    "Minimum expected height for image should be '%minheight%' but '%height%' detected" => "A altura mínima esperada para a imagem deveria ser '%minheight%', mas '%height%' foi detectada",
    "The size of image could not be detected" => "O tamanho da imagem não pôde ser detectado",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\IsCompressed
    "File is not compressed, '%type%' detected" => "O ficheiro não está compactado: '%type%' detectado",
    "The mimetype could not be detected from the file" => "O tipo do ficheiro não pôde ser detectado",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\IsImage
    "File is no image, '%type%' detected" => "O ficheiro não é uma imagem: '%type%' detectado",
    "The mimetype could not be detected from the file" => "O tipo do ficheiro não pôde ser detectado",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\Md5
    "File does not match the given md5 hashes" => "O ficheiro não corresponde às hashes md5 fornecidas",
    "An md5 hash could not be evaluated for the given file" => "Não foi possível avaliar uma hash md5 para o ficheiro fornecido",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\MimeType
    "File has an incorrect mimetype of '%type%'" => "O ficheiro tem um tipo incorreto: '%type%'",
    "The mimetype could not be detected from the file" => "O tipo do ficheiro não pôde ser detectado",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\NotExists
    "File exists" => "O ficheiro existe",

    // Zend\Validator\File\Sha1
    "File does not match the given sha1 hashes" => "O ficheiro não corresponde às hashes sha1 fornecidas",
    "A sha1 hash could not be evaluated for the given file" => "Não foi possível avaliar uma hash sha1 para o ficheiro fornecido",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

   // Zend\Validator\File\Size
    "Maximum allowed size for file is '%max%' but '%size%' detected" => "O tamanho máximo permitido para o ficheiro é '%max%', mas '%size%' foi detectado",
    "Minimum expected size for file is '%min%' but '%size%' detected" => "O tamanho mínimo esperado para o ficheiro é '%min%', mas '%size%' foi detectado",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\File\Upload
    "File '%value%' exceeds the defined ini size" => "O ficheiro '%value%' excede o tamanho definido na configuração",
    "File '%value%' exceeds the defined form size" => "O ficheiro '%value%' excede o tamanho definido do formulário",
    "File '%value%' was only partially uploaded" => "O ficheiro '%value%' foi apenas parcialmente enviado",
    "File '%value%' was not uploaded" => "O ficheiro '%value%' não foi enviado",
    "No temporary directory was found for file '%value%'" => "Nenhum diretório temporário foi encontrado para o ficheiro '%value%'",
    "File '%value%' can't be written" => "O ficheiro '%value%' não pôde ser escrito",
    "A PHP extension returned an error while uploading the file '%value%'" => "Uma extensão do PHP retornou um erro enquanto o ficheiro '%value%' era enviado",
    "File '%value%' was illegally uploaded. This could be a possible attack" => "O ficheiro '%value%' foi enviado ilegalmente. Pode tratar-se eventualmente de um ataque",
    "File '%value%' was not found" => "O ficheiro '%value%' não foi encontrado",
    "Unknown error while uploading file '%value%'" => "Erro desconhecido ao enviar o ficheiro '%value%'",

    // Zend\Validator\File\UploadFile
    "File exceeds the defined ini size" => "O ficheiro excede o tamanho definido na configuração",
    "File exceeds the defined form size" => "O ficheiro excede o tamanho definido do formulário",
    "File was only partially uploaded" => "O ficheiro foi apenas parcialmente enviado",
    "File was not uploaded" => "O ficheiro não foi enviado",
    "No temporary directory was found for file" => "Nenhum diretório temporário foi encontrado para o ficheiro",
    "File can't be written" => "O ficheiro não pôde ser escrito",
    "A PHP extension returned an error while uploading the file" => "Uma extensão do PHP retornou um erro enquanto o ficheiro era enviado",
    "File was illegally uploaded. This could be a possible attack" => "O ficheiro foi enviado ilegalmente. Pode tratar-se eventualmente de um ataque",
    "File was not found" => "O ficheiro não foi encontrado",
    "Unknown error while uploading file" => "Erro desconhecido ao enviar o ficheiro",

    // Zend\Validator\File\WordCount
    "Too many words, maximum '%max%' are allowed but '%count%' were counted" => "Número excessivo de palavras, são permitidas no máximo '%max%', mas '%count%' foram contadas",
    "Too few words, minimum '%min%' are expected but '%count%' were counted" => "Número insuficiente de palavras, são esperadas no mínimo '%min%', mas '%count%' foram contadas",
    "File is not readable or does not exist" => "O ficheiro não pode ser lido ou não existe",

    // Zend\Validator\GreaterThan
    "The input is not greater than '%min%'" => "O valor introduzido não é maior do que '%min%'",
    "The input is not greater or equal than '%min%'" => "O valor introduzido não é maior ou igual a '%min%'",

    // Zend\Validator\Hex
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser do tipo string",
    "The input contains non-hexadecimal characters" => "O valor introduzido contém caracteres não-hexadecimais",

    // Zend\Validator\Hostname
    "The input appears to be a DNS hostname but the given punycode notation cannot be decoded" => "O valor introduzido parece ser um hostname de DNS, mas a notação punycode fornecida não pode ser decodificada",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser do tipo string",
    "The input appears to be a DNS hostname but contains a dash in an invalid position" => "O valor introduzido parece ser um hostname de DNS, mas contém um traçonuma posição inválida",
    "The input does not match the expected structure for a DNS hostname" => "O valor introduzido não corresponde à estrutura esperada para um hostname de DNS",
    "The input appears to be a DNS hostname but cannot match against hostname schema for TLD '%tld%'" => "O valor introduzido parece ser um hostname de DNS, mas não corresponde ao esquema de hostname para o TLD '%tld%'",
    "The input does not appear to be a valid local network name" => "O valor introduzido não parece ser um nome de rede local válido",
    "The input does not appear to be a valid URI hostname" => "O valor introduzido não parece ser um URI de hostname válido",
    "The input appears to be an IP address, but IP addresses are not allowed" => "O valor introduzido parece ser um endereço de IP, mas endereços de IP não são permitidos",
    "The input appears to be a local network name but local network names are not allowed" => "O valor introduzido parece ser um nome de rede local, mas os nomes de rede local não são permitidos",
    "The input appears to be a DNS hostname but cannot extract TLD part" => "O valor introduzido parece ser um hostname de DNS, mas o TLD não pôde ser extraído",
    "The input appears to be a DNS hostname but cannot match TLD against known list" => "O valor introduzido parece ser um hostname de DNS, mas o TLD não corresponde a nenhum TLD conhecido",

    // Zend\Validator\Iban
    "Unknown country within the IBAN" => "País desconhecido no IBAN",
    "Countries outside the Single Euro Payments Area (SEPA) are not supported" => "Países fora da Área Única de Pagamentos em Euros (SEPA) não são suportados",
    "The input has a false IBAN format" => "O valor introduzido não é um formato IBAN válido",
    "The input has failed the IBAN check" => "O valor introduzido falhou na verificação do IBAN",

    // Zend\Validator\Identical
    "The two given tokens do not match" => "Os dois valores fornecidos não são iguais",
    "No token was provided to match against" => "Nenhum valor foi fornecido para a comparação",

    // Zend\Validator\InArray
    "The input was not found in the haystack" => "O valor introduzido não faz parte dos valores esperados",

    // Zend\Validator\Ip
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",
    "The input does not appear to be a valid IP address" => "O valor introduzido não parece ser um endereço de IP válido",

    // Zend\Validator\IsInstanceOf
    "The input is not an instance of '%className%'" => "O valor introduzido não é uma instância de '%className%'",

    // Zend\Validator\Isbn
    "Invalid type given. String or integer expected" => "O tipo do valor introduzido é inválido, o valor deve ser string ou inteiro",
    "The input is not a valid ISBN number" => "O valor introduzido não é um número ISBN válido",

    // Zend\Validator\LessThan
    "The input is not less than '%max%'" => "O valor introduzido não é menor do que '%max%'",
    "The input is not less or equal than '%max%'" => "O valor introduzido não é menor ou igual a '%max%'",

    // Zend\Validator\NotEmpty
    "Value is required and can't be empty" => "O valor é obrigatório e não pode estar vazio",
    "Invalid type given. String, integer, float, boolean or array expected" => "O tipo do valor introduzido é inválido, o valor deve ser float, string, array, booleano ou inteiro",

    // Zend\Validator\Regex
    "Invalid type given. String, integer or float expected" => "O tipo do valor introduzido é inválido, o valor deve ser string, inteiro ou float",
    "The input does not match against pattern '%pattern%'" => "O valor introduzido não corresponde ao padrão '%pattern%'",
    "There was an internal error while using the pattern '%pattern%'" => "Ocorreu um erro interno durante a utilização do padrão '%pattern%'",

    // Zend\Validator\Sitemap\Changefreq
    "The input is not a valid sitemap changefreq" => "O valor introduzido não é um changefreq (frequência de alterações) de sitemap válido",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",

    // Zend\Validator\Sitemap\Lastmod
    "The input is not a valid sitemap lastmod" => "O valor introduzido não é um lastmod (última modificação) de sitemap válido",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",

    // Zend\Validator\Sitemap\Loc
    "The input is not a valid sitemap location" => "O valor introduzido não é uma localização de sitemap válida",
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",

    // Zend\Validator\Sitemap\Priority
    "The input is not a valid sitemap priority" => "O valor introduzido não é uma prioridade de sitemap válida",
    "Invalid type given. Numeric string, integer or float expected" => "O tipo do valor introduzido é inválido, o valor deve ser um inteiro, um float ou uma string numérica",

    // Zend\Validator\Step
    "Invalid value given. Scalar expected" => "O valor especificado é inválido, o valor deve ser escalar",
    "The input is not a valid step" => "O valor introduzido não é um passo válido",

    // Zend\Validator\StringLength
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",
    "The input is less than %min% characters long" => "O tamanho do valor introduzido é inferior a %min% caracteres",
    "The input is more than %max% characters long" => "O tamanho do valor introduzido é superior a %max% caracteres",

    // Zend\Validator\Timezone
    "Invalid timezone given." => "Fuso horário fornecido é inválido.",
    "Invalid timezone location given." => "Localização de fuso horário fornecida é inválida.",
    "Invalid timezone abbreviation given." => "Abreviatura de fuso horário fornecida é inválida.",

    // Zend\Validator\Uri
    "Invalid type given. String expected" => "O tipo do valor introduzido é inválido, o valor deve ser uma string",
    "The input does not appear to be a valid Uri" => "O valor introduzido não parece ser um Uri válido",
];
