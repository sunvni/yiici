pipeline {
     agent {
        node {
            label 'yiici'
            customWorkspace '/home/jenkins/yiici'
        }
    }
    options { timestamps () }

    parameters { string(name: 'GIT_BRANCH', defaultValue: 'master', description: 'branch to deploy') }

    stages {
        stage("Clone From GitHub") {
           steps {
                checkout(
                    [$class: 'GitSCM', branches: [[name: "*/${params.GIT_BRANCH}"]],
                        doGenerateSubmoduleConfigurations: false,
                        extensions: [],
                        submoduleCfg: [],
                        userRemoteConfigs: [[url: 'https://github.com/sunvni/yiici.git']]]
                )
           }
        }
        stage('Build') {
            steps {
                sh "sudo docker-compose build"
                sh "sudo docker-compose up -d"
            }
        }
        stage('Composer Install') {
            steps {
                sh "sudo docker exec yiici_php_1 composer install"
            }
        }
        stage('Push Image') {
            steps {
                docker.withRegistry('https://registry.hub.docker.com', 'DockerHub') {            
                    app.push("${env.BUILD_NUMBER}")            
                    app.push("latest")        
                }
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
