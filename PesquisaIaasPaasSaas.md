
IaaS                                | PaaS                               | SaaS                 |
------------------------------------|------------------------------------|----------------------|
AWS                                 |    AWS Elastic Beanstalk           | Dropbox              |
Azure                               |    Heroku                          | Salesforce           |
Google Cloud                        |    Google Cloud Run                | Google Workspace     |

## Infraestrutura como serviço
*Precisa configurar tudo que não seja relacionado a hardware*

```txt
AWS: A AWS possui uma enorme e crescente variedade de serviços disponíveis, bem como a rede mais abrangente de data centers em todo o mundo. 
- Prós: Variedade de serviços, Maturidade, Flexibilidade.
- Contras: Precisa de 2 doutorados para não ficar confuso decidindo qual serviço se encaixa melhor.

Azure: integração com as aplicações/softwares da Microsoft. Como o Azure está totalmente integrado a esses outros aplicativos, as empresas que usam muitos softwares da Microsoft geralmente acham que também faz sentido usar o Azure.
- Prós: Suporte empresarial, integração com tecnologias microsoft.
- Contras: Variedade menor comparada à aws.

Google Cloud: Tem um número menor de opções de VMs, mas permite que os usuários criem seus próprios tamanhos personalizados (CPU, memória) para que os clientes possam combinar o tamanho das cargas de trabalho. O faturamento também é feito com base na CPU e memória totais usadas, em vez de VMs individuais.
- Prós: Big Data e Machine Learning, Escalabilidade.
- Contras: Curva de aprendizado alta.

```

* Todos os provedores oferecem diferentes níveis de suporte técnico, desde suporte básico até suporte empresarial.
* Os preços dependem das configurações escolhidas e mudam um pouco constantemente, então varia de caso para caso.
* A segurança também depende de configuração, cabe ao usuário escolher o que precisa.

----

## Plataforma como serviço
*Hospedar e desenvolver um software sem se preocupar com infraestrutura, SO e dependências*



```txt
AWS Elastic Beanstalk: Facilidade de implantar e gerenciar aplicações Web com provisionamento de capacidade, monitoramento da integridade da aplicação, etc. Suporta várias linguagens de programação e frameworks, incluindo Java, .NET, Python, Ruby, Node.js, etc.
- Prós: Fácil implantação, Escalabilidade automática.
- Contras: Complexo para se familiarizar.

Heroku: É uma das primeiras plataformas em nuvem e vem se aprimorando cada vez mais para suportar diferentes linguagens. Simples e fácil de usar.
- Prós: Simplicidade, Escalabilidade automática.
- Contras: Controle Limitado sobre a Infraestrutura, Limitações de personalização.

Cloud Run: Permite que os desenvolvedores implantem contêineres sem se preocupar com o gerenciamento da infraestrutura. Pode ser usado com qualquer linguagem ou framework que possa ser executado em um contêiner. Tem integração com outros serviços do Google. 
- Prós: Escalabilidade automática, Mais econômico.
- Contras: Depende de aprender a utilizar contêineres, Um pouco complexo para iniciantes.

```
----

* Os preços dependem do uso e dos recursos consumidos.
 
## Software como serviço
*Usar o software sem preocupações com o resto*

```txt
Dropbox: serviço para armazenamento e partilha de arquivos, disponibilizando salvar e acessar arquivos a qualquer momento.
- Prós: Armazenamento em Nuvem, Simplicidade, Recuperação de arquivos.
- Contras: Personalização limitada comparada a outras plataformas.

Salesforce: É uma plataforma de gestão de relacionamento com o cliente (CRM) que ajuda a gerenciar vendas, marketing, suporte ao cliente, etc. Fácil utilização e melhorias constantes.
- Prós: Automação, Recursos para gerar relatórios.
- Contras: Preço pode ser meio caro, Foco específico em CRM.
Google Workspace: Grande variedade de ferramentas que tem integração com outros produtos do google. É projetado para colaboração, comunicação e criação de documentos. É especialmente conhecido por suas capacidades de colaboração em tempo real.
- Prós: Colaboração em tempo real, escalabilidade.
- Contras: Depende 100% de internet..

```