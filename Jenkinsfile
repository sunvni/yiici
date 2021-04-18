pipeline {
     agent {
        node {
            label 'yiici'
            customWorkspace '/home/sunvni/workspace'
        }
    }
    options { timestamps () }

    parameters { string(name: 'GIT_BRANCH', defaultValue: 'master', description: 'branch to deploy') }

    stages {
        stage("Clone From GitHub") {
            checkout(
                [$class: 'GitSCM', branches: [[name: '*/${params.GIT_BRANCH}']],
                    doGenerateSubmoduleConfigurations: false,
                    extensions: [],
                    submoduleCfg: [],
                    userRemoteConfigs: [[url: 'https://github.com/sunvni/yiici.git']]]
            )
        }
        stage('Composer Install') {
            dir("yiici/") {
                sh 'composer install --ignore-platform-reqs'
            }
        }
        stage('Build') {
            steps {
                sh "sudo docker-compose build"
                sh "sudo docker-compose up -d"
            }
        }
        stage('Test') {
            steps {
                sh "sudo docker-compose exec composer run-script test"
            }
        }
        stage('Deploy') {
            steps {
                echo 'Deploying....'
            }
        }
    }
}
